<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class DocCourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $base_url = config('app.url');

        return [
            'id_document' => $this->id_document,
            'id_course' => $this->id_course,
            //'document_url' => Storage::disk('public')->url('courses_pics/' . $this->document_path),
            'document_url' => $base_url . '/storage/courses_pics/' . $this->document_path,
            'document_path' => $this->document_path, // Dejamos el nombre limpio tal cual está en BD
            'ext' => $this->ext,
            'active' => (bool) $this->active,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
        ];
    }
}
