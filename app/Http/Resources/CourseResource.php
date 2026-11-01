<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'email' => $this->email,
            'active' => (bool) $this->active,
            'id_course' => $this->id_course, // O $this->id_course dependiendo de cómo se llame tu columna primaria
            // Aquí mapeamos la relación 'documents' (asegúrate de que en tu modelo Course la relación se llame 'doc' o 'documents')
            'documents' => DocCourseResource::collection($this->whenLoaded('documents')),
        ];
    }
}
