<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;
use App\Models\Course;
use App\Models\DocumentCourse;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    public function createCourse(Request $request)
    {
        Log::info($request);
        $validator = Validator::make($request->all(), [
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                // 1. Validar que el email exista en la tabla users
                // 2. Validar que el usuario tenga id_rol 1 (Admin) o 2 (Profesor)
                'email' => [
                    'required',
                    'email',
                    'max:255',
                    'exists:users,email',
                    function ($attribute, $value, $fail) {
                        $user = \App\Models\User::where('email', $value)->first();
                        
                        if ($user && !in_array($user->id_rol, config('env.PermittedRoles', [1, 2]))) {
                            $fail('El usuario asociado al correo no cuenta con permisos de Administrador o Profesor para crear cursos.');
                        }
                    },
                ],
                'document' => 'nullable|file|max:5120',
            ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        DB::beginTransaction();
        
        try {
            $course = new Course();
            $course = $course->createCourse($request);

            if ($request->has('document')) {
                $course_pic = new DocumentsController();
                $saved_document = $course_pic->uploadCoursePic($request, $course->id_course);
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }

        return response()->json([
            'status' => 'success',
            'course' => $course,
            'doc' => $saved_document
        ], 201);
    }

    public function updateCourse(Request $request, $id_course)
    {
        // 1. Validaciones básicas de los campos de texto e imagen opcional
        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'email' => 'sometimes|required|email',
            'document' => 'sometimes|file|mimes:jpg,jpeg,png,pdf|max:5120', // Opcional
        ]);

        // 2. Validar el rol del profesor si viene el email en el request
        if ($request->has('email')) {
            $user = User::where('email', $request->email)->first();

            // Verificamos si el usuario existe y si su tipo/rol es 3 (Estudiante)
            if (!$user || $user->id_rol == 3 || !$user->active) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'No se puede asignar este correo (usuario no encontrado, inactivo o es un estudiante).'
                ], 422);
            }
        }

        // Iniciamos la transacción de base de datos
        DB::beginTransaction();

        try {
            // Buscamos el curso
            $course = Course::where('id_course', $id_course)->where('active', true)->first();

            if (!$course) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Curso no encontrado o inactivo.'
                ], 404);
            }

            // Actualizamos los datos básicos del curso con los campos que vengan en el request
            $course->fill($request->only(['title', 'description', 'email']));
            
            // Si el título cambió, opcionalmente podrías actualizar un slug del curso si lo usas, 
            // pero nos enfocaremos en los campos principales que mencionaste.
            $course->save();

            // 3. Manejo opcional de la nueva imagen/documento
            if ($request->hasFile('document')) {
                // A. Buscar el último documento activo de este curso y pasarlo a false
                // (Asumiendo que tu modelo de documentos se llama CourseDocument o similar)
                $lastDoc = DocumentCourse::where('id_course', $id_course)
                    ->where('active', true)
                    ->latest() // O por ID descendente
                    ->first();

                if ($lastDoc) {
                    $lastDoc->active = false;
                    $lastDoc->save();
                }
                
                //B cargamos el nuevo documento
                $course_pic = new DocumentsController();
                $saved_document = $course_pic->uploadCoursePic($request, $id_course);
            }

            // Si todo salió bien, confirmamos la transacción
            DB::commit();

            return response()->json([
                'status' => 'success',
                'message' => 'Curso actualizado correctamente.',
                //'course' => new CourseResource($course->load(['documents' => function($q) { $q->where('active', true); }]))
            ], 200);

        } catch (\Exception $e) {
            // Si ocurre cualquier error, revertimos todo lo hecho en la BD
            DB::rollBack();

            return response()->json([
                'status' => 'error',
                'message' => 'Error al actualizar el curso: ' . $e->getMessage()
            ], 500);
        }
    }

    public function getCourses()
    {
        try {
        // Obtenemos todos los cursos cargando su relación 'documents' activos
        $courses = Course::with(['documents' => function ($query) {
                        $query->where('active', true);
                    }])
                    ->where('active', true) // Opcional, si también quieres filtrar cursos activos
                    ->get();

        return response()->json([
            'status' => 'success',
            // Usamos el Resource en formato colección para múltiples registros
            'courses' => CourseResource::collection($courses)
        ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function getCourseById($id_course)
    {
        try {
        // Buscamos el curso y filtramos solo sus documentos activos
        $course = Course::with(['documents' => function ($query) {
            $query->where('active', true);
        }])
        ->where('active', true)
        ->where('id_course', $id_course) // O ->where('id', $id) según cómo se llame tu columna PK
        ->first();

        // Si no existe o está inactivo, retornamos un 404 limpio
        if (!$course) {
            return response()->json([
                'status' => 'error',
                'message' => 'Course Does not exists or its desactived'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'course' => new CourseResource($course) // Usamos instancia única, no ->collection()
        ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
