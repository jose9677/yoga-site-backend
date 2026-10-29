<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Document extends Model
{
    protected $fillable = [
        'email',
        'document_path',
        'ext',
        'active',
        'id_document_type',
        'id_course'
    ];

    protected function casts(): array
    {
        return [
            'active' => 'boolean',
        ];
    }

    protected $table = 'documents';
    protected $primaryKey = 'id_document';
    public $incrementing = false;

    public function uploadProfilePic($file, string $email, int $document_type_id, ?int $course_id = null)
    {
        // Generar nombre único para el archivo
        $date = str_replace(['.', ' '], '', 'y-m-d-'.(string)microtime());
        $extension = $file->getClientOriginalExtension();
        
        $safe_email = str_replace(['@', '.'], '_', $email);
        $rename = $safe_email.'_type'.$document_type_id.'_'.$date.'.'.$extension;

        try {
            // Guardar registro en la base de datos
            $document = self::create([
                'email' => $email,
                'document_path' => $rename,
                'ext' => $extension,
                'active' => true,
                'id_document_type' => $document_type_id,
                'id_course' => $course_id
            ]);
        } catch (\Throwable $th) {
            throw new Exception("Error saving document to database: " . $th->getMessage(), 1);
        }

        // Subida física al disco (puedes cambiar 'public' por el disco que uses)
        try {
            // Aquí puedes ajustar la carpeta destino, por ejemplo 'official_docs/' o directo
            Storage::disk('public')->putFileAs('profile_pics', $file, $rename);
        } catch (\Throwable $th) {
            // Si falla el almacenamiento, eliminamos el registro creado para mantener consistencia
            $document->delete();
            throw new Exception("Error uploading file to local storage", 1);
        }

        return $document;
    }
}
