<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyAdvertisementDetail extends Model
{
    protected $fillable = [
        'property_advertisement_id',
        'title',
        'description',
        'content',
        'city_id',
        'square',
        'rent_period',
        'Bedrooms',
        'beds',
        'location_id',
        'currency_id',
        'auto_renew',
        'Floors',
        'Nearby',
        'price',
        'video_url',
        'seo_title',
        'seo_description',
        'seo_link',
        'features',
        'facilities',
    ];

    public function propertyAdvertisement()
    {
        return $this->belongsTo(PropertyAdvertisement::class, 'property_advertisement_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_id');
    }
}
