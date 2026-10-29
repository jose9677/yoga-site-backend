<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Exception;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    public function uploadProfilePic(Request $request)
    {
        // 1. Validaciones básicas en el controlador
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'document' => 'required|file|max:5120', // Máximo 5MB
            //'id_document_type' => 'required|exists:documents_type,id_document_type',
            'id_course' => 'nullable|exists:courses,id',
        ]);

        $file = $request->file('document');
        $extension = strtolower($file->getClientOriginalExtension());

        // 2. Validar extensión usando tu configuración
        $extensions = config('env.extensionsFileUserDocuments', ['jpg', 'jpeg', 'png', 'pdf']);
        if (!in_array($extension, $extensions)) {
            throw new Exception("Invalid file extension", 1);
        }

        // 3. Validar si ya existe un documento activo de este tipo para este usuario
        $document_exists = Document::where('email', $request->email)
            ->where('id_document_type', $request->id_document_type)
            ->where('active', true)
            ->exists();

        if ($document_exists) {
            throw new Exception("This document type has already been loaded for this user", 1);
        }

        // 4. Delegamos la persistencia y la subida física al Modelo
        $document_model = new Document();
        $saved_document = $document_model->uploadProfilePic(
            $file, 
            $request->email, 
            1,
            //$request->id_document_type, 
            $request->id_course
        );

        return $saved_document;
    }
}
