<?php

namespace App\Models;

use App\Models\Agent;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Broker extends Model implements HasMedia // commertial number , commercial license , profile
{
    use InteractsWithMedia;

    protected $fillable = [
        'is_developer',
        'val_license_number', // for broker
        'commercial_registration',
        'license_number',
        'user_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function agents()
    {
        return $this->hasMany(Agent::class);
    }
}
