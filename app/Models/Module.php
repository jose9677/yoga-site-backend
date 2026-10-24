<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = [
        'id_module',
        'description',
        'id_course',
        'active',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    protected $table = 'modules';
    protected $primaryKey = 'id_module';
    public $incrementing = false;
}
