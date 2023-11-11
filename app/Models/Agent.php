<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'broker_id'];

    function user()
    {
        return $this->belongsTo(User::class);
    }
    function broker()
    {
        return $this->belongsTo(Broker::class);
    }
}
