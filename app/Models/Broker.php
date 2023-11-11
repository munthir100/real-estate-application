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
        'user_id',
        'is_developer',
        'commertial_number',
        'office_name',
        'tax_number',
        'company_name',
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
