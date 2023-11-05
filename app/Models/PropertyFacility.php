<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyFacility extends Model
{
    protected $table = 'property_facilities';
    
    protected $fillable = ['property_id', 'facility_id', 'distance'];

    public function propertyAdvertisement()
    {
        return $this->belongsTo(Property::class);
    }

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }
}
