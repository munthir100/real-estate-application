<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'property_advertisement_id',
    ];

    public function propertyAdvertisement()
    {
        return $this->belongsTo(PropertyAdvertisement::class, 'property_advertisement_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
