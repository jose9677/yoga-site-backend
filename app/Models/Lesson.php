<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'id_module',
        'title',
        'content_url',
        'duration',
        'order',
        'active',
        'vimeo_id',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    protected $table = 'lessons';
    protected $primaryKey = 'id_lesson';
    public $incrementing = false;

}
