<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $fillable = [
        'name',
    ];

    public function propertyAdvertisements()
    {
        return $this->belongsToMany(Property::class);
    }
    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_facilities', 'facility_id', 'property_id')
            ->withPivot('distance'); // If you want to retrieve the distance as well
    }
}
