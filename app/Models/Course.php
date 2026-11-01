<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Course extends Model
{
    protected $fillable = [
        'title',
        'description',
        'email',
        'active',
        'created_at',   
        'updated_at'
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    public function modules()
    {
        return $this->hasMany(Module::class, 'id_course', 'id_course');
    }

    public function documents()
    {
        return $this->hasMany(DocumentCourse::class, 'id_course', 'id_course');
    }

    public function createCourse($request)
    {
        $course = Course::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'email' => $request->input('email'),
            'active' => true,
        ]);

        return $course;
    }

    protected $table = 'courses';
    public $timestamps = false;
    protected $primaryKey = 'id_course';
}
