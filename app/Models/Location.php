<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['name', 'longitude', 'latitude'];

    // Define the relationship with PropertyAdvertisement model
    public function propertyAdvertisements()
    {
        return $this->hasMany(PropertyAdvertisement::class, 'location_id');
    }
}
