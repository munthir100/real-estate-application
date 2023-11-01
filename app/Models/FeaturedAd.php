<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeaturedAd extends Model
{
    protected $fillable = [
        'property_advertisement_id',
    ];

    public function propertyAdvertisement()
    {
        return $this->belongsTo(PropertyAdvertisement::class, 'property_advertisement_id');
    }
}
