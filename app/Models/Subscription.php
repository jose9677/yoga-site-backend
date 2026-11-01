<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'id_plan',
        'id_status',
        'starts_at',
        'ends_at',
        'trial_ends_at',
        'email',
        'active',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];

    protected $table = 'subscriptions';
    protected $primaryKey = 'id_sub';
    public $incrementing = false;
}
