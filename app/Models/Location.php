<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['name', 'longitude', 'latitude'];

    // Define the relationship with Property model
    public function propertyAdvertisements()
    {
        return $this->hasMany(Property::class, 'location_id');
    }
}
