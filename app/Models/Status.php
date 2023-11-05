<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['name']; // Add any other fillable columns here

    const ACCEPTED = 1;
    const PENDING = 2;
    const REJECTED = 3;
}
