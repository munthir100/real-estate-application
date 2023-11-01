<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    protected $fillable = ['name']; // Add any other fillable columns here

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    // Define any other relationships with other models here
}
