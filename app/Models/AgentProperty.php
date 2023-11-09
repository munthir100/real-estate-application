<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentProperty extends Model
{
    use HasFactory;
    protected $fillable = ['property_id', 'agent_id'];

    function agent()
    {
        return $this->belongsTo(Agent::class);
    }
    
    function property()
    {
        return $this->belongsTo(Property::class);
    }
}
