<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DocumentCourse extends Model
{
    protected $fillable = [
        'id_course',
        'document_path',
        'ext',
        'active'
    ];

    protected function casts(): array
    {
        return [
            'active' => 'boolean',
        ];
    }

        public function uploadCoursePic($file, int $id_course, string $title)
    {
        // Generar nombre único para el archivo
        $date = str_replace(['.', ' '], '', 'y-m-d-'.(string)microtime());
        $extension = $file->getClientOriginalExtension();
        
        $safe_title = Str::slug($title, '_'); 
        // "Curso de prueba?" se convierte en "curso_de_prueba"
        $rename = $id_course.'_'.$safe_title.'_'.$date.'.'.$extension;

        try {
            // Guardar registro en la base de datos
            $document = self::create([
                'id_course' => $id_course,
                'document_path' => $rename,
                'ext' => $extension,
                'active' => true
            ]);
        } catch (\Throwable $th) {
            throw new Exception("Error saving document to database: " . $th->getMessage(), 1);
        }

        // Subida física al disco (puedes cambiar 'public' por el disco que uses)
        try {
            // Aquí puedes ajustar la carpeta destino, por ejemplo 'official_docs/' o directo
            Storage::disk('public')->putFileAs('courses_pics', $file, $rename);
        } catch (\Throwable $th) {
            // Si falla el almacenamiento, eliminamos el registro creado para mantener consistencia
            $document->delete();
            throw new Exception("Error uploading file to local storage", 1);
        }

        return $document;
    }

    protected $table = 'document_courses';
    protected $primaryKey = 'id_document';
    public $incrementing = false;
}
