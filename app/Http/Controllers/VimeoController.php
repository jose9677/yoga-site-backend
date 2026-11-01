<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use Vimeo\Laravel\Facades\Vimeo;

class VimeoController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'video' => 'required|mimetypes:video/mp4,video/avi,video/mpeg|max:50240', // 50MB máx (ajústalo si necesitas más)
            'title' => 'required|string',
            'description' => 'nullable|string',
            'id_module' => 'required|exists:modules,id_module', // O el campo que relacione tu lección
        ]);

        $videoPath = $request->file('video')->getRealPath();

        try {
            // 1. Subir video a Vimeo usando la fachada
            $response = Vimeo::upload($videoPath, [
                'name' => $request->input('title'),
                'description' => $request->input('description', ''),
            ]);

            // El paquete devuelve el URI completo (ej: "/videos/123456789")
            $vimeoUri = is_array($response) ? ($response['uri'] ?? $response) : $response;
            $videoId = str_replace('/videos/', '', $vimeoUri);
            $videoUrl = is_array($response) ? ($response['link'] ?? "https://vimeo.com/{$videoId}") : "https://vimeo.com/{$videoId}";

            // 2. Obtener metadatos (minutos y segundos) consultando la API de Vimeo
            $minutes = 0;
            $seconds = 0;

            try {
                $videoDetails = Vimeo::request($vimeoUri);
                $durationInSeconds = $videoDetails['body']['duration'] ?? 0;
                $minutes = floor($durationInSeconds / 60);
                $seconds = $durationInSeconds % 60;
            } catch (\Throwable $th) {
                // Si el video sigue codificándose y la duración viene en 0, no detenemos el flujo
            }

            // 3. Guardar el registro en la tabla 'lessons'
            $lesson = Lesson::create([
                'id_module' => $request->input('id_module'),
                'title' => $request->input('title'),
                //'description' => $request->input('description'),
                'vimeo_id' => $videoId,
                'content_url' => $videoUrl,
                'duration' => $minutes,
                'order' => 1, // Ajusta según tu lógica de orden
                'active' => true,
                //'duration_seconds' => $seconds,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Video subido y lección registrada correctamente',
                'data' => $lesson
            ], 201);

        } catch (\Throwable $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Error al subir el video a Vimeo: ' . $e->getMessage()
            ], 500);
        }
    }
}
