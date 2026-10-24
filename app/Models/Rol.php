<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable = [
        'description',
        'active'
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    protected $table = 'roles';
    protected $primaryKey = 'id_rol';
    public $incrementing = false;
}
