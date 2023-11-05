<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyFeature extends Model
{
    use HasFactory;


    public function propertyAdvertisement()
    {
        return $this->belongsTo(Property::class);
    }

    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }
}
