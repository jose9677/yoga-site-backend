<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'invoice_period',
        'invoice_interval',
        'active',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    protected $table = 'plans';
    protected $primaryKey = 'id_plan';
    public $incrementing = false;
}
