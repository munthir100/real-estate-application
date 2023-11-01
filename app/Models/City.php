<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name', 'town_id']; // Add any other fillable columns here

    public function town()
    {
        return $this->belongsTo(Town::class);
    }

    // Define any other relationships with other models here
}
