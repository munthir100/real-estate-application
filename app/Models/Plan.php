<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'name',
        'price',
        'duration',
        'num_ads_allowed',
        'num_temp_ads',
        'num_distinctive_ads',
        'priority_support',
        'num_affiliate_users',
        'include_ologo',
        // Add other fillable attributes here
    ];

    // Define a one-to-many relationship with the User model
    public function users()
    {
        return $this->hasMany(User::class, 'plan_id');
    }
}
