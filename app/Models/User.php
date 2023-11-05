<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'phone',
        'description',
        'birth_date',
        'email',
        'gender',
        'password',
        'user_type_id',
    ];


    public function userType()
    {
        return $this->belongsTo(UserType::class, 'user_type_id');
    }

    public function subscriber()
    {
        return $this->hasOne(Subscriber::class, 'user_id');
    }

    public function browser()
    {
        return $this->hasOne(Browser::class, 'user_id');
    }

    public function admin()
    {
        return $this->hasOne(Admin::class, 'user_id');
    }

    public function properties()
    {
        return $this->hasMany(Property::class, 'user_id');
    }

    public function applications()
    {
        return $this->hasMany(Application::class, 'user_id');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class, 'user_id');
    }

    public function plan()
    {
        return $this->hasOne(UserPlan::class);
    }

    // attributes

    public function getIsSubscriberAttribute()
    {
        return $this->user_type_id == UserType::SUBSCRIBER;
    }

    public function getIsAdminAttribute()
    {
        return $this->user_type_id == UserType::ADMIN;
    }

    // Accessor for "isBrowser"
    public function getIsBrowserAttribute()
    {
        return $this->user_type_id == UserType::BROWSER;
    }
    public function getHasActivePlanAttribute()
    {
        
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
