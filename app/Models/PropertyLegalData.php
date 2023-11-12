<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyLegalData extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'license_number',
        'date_of_license',
        'license_expiration_date',
        'postal_code',
        'building_number',
        'additional_number',
        'has_restriction',
        'has_mortgage',
        'obligations_on_property',
    ];
}
