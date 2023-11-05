<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    public function propertyAdvertisementFeatures()
    {
        return $this->hasMany(PropertyFeature::class);
    }
}