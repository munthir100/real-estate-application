<?php

// app/UserType.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $fillable = ['name'];
    const BROKER = 1;
    const SEEKER = 2;
    const ADMIN = 3;
    const AGENT = 4;
    // Define the relationship with the User model
    public function users()
    {
        return $this->hasMany(User::class, 'user_type_id');
    }
}
