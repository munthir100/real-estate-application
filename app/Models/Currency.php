<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;
    
    const USD = 1;
    const SAR = 2;

    protected $fillable = ['name','code'];
    
}
