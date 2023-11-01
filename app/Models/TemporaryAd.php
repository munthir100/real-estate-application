<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TemporaryAd extends Model
{
    protected $fillable = [
        'property_advertisement_id',
        'start_date',
        'end_date',
    ];

    public function propertyAdvertisement()
    {
        return $this->belongsTo(PropertyAdvertisement::class, 'property_advertisement_id');
    }
}
