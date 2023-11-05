<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'name',
        'price',
        'duration',
        'num_properties_allowed',
        'priority_support',
        'num_affiliate_users',
        // Add other fillable attributes here
    ];

    // Define a one-to-many relationship with the User model
    public function users()
    {
        return $this->hasMany(User::class, 'plan_id');
    }
}
