<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

    public function modules()
    {
        return $this->hasMany(Module::class, 'id_course', 'id_course');
    }

    protected $table = 'courses';
    public $timestamps = false;
    protected $primaryKey = 'id_course';
}
