<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionStatus extends Model
{
    protected $fillable = [
        'description',
        'active'
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    protected $table = 'subscription_status';
    protected $primaryKey = 'id_status';
    public $incrementing = false;
}
