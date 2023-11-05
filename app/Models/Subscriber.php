<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable = [
        'user_id',
        'commertial_number',
        'office_name',
        'tax_number',
        'company_name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
