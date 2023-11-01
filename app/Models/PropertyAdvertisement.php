<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyAdvertisement extends Model
{
    protected $fillable = [
        'user_id',
        'property_advertisement_type_id',
        'status_id',
        'city_id',
        // Add other fillable fields
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function propertyAdvertisementType()
    {
        return $this->belongsTo(PropertyAdvertisementType::class, 'property_advertisement_type_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    // Define other relationships as needed
}
