<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Property;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
        'middle_name',
        'last_name',
        'username',
        'phone',
        'description',
        'birth_date',
        'email',
        'gender',
        'password',
        'user_type_id',
        'user_verified_at',
    ];


    public function userType()
    {
        return $this->belongsTo(UserType::class, 'user_type_id');
    }

    public function broker()
    {
        return $this->hasOne(Broker::class, 'user_id');
    }

    public function seeker()
    {
        return $this->hasOne(Seeker::class, 'user_id');
    }

    public function agent()
    {
        return $this->hasOne(Agent::class, 'user_id');
    }

    public function admin()
    {
        return $this->hasOne(Admin::class, 'user_id');
    }

    public function properties()
    {
        return $this->hasMany(Property::class, 'user_id');
    }

    public function acceptedProperties()
    {
        return $this->hasMany(Property::class, 'user_id')->where('status_id', Status::ACCEPTED);
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

    function verificationCode()
    {
        return $this->hasOne(UserVerificationCode::class);
    }

    // attributes

    public function getIsBrokerAttribute()
    {
        return $this->user_type_id == UserType::BROKER;
    }

    public function getIsDeveloperBrokerAttribute()
    {
        return $this->user_type_id == UserType::BROKER && $this->broker->is_developer;
    }

    public function getIsAdminAttribute()
    {
        return $this->user_type_id == UserType::ADMIN;
    }

    // Accessor for "isSeeker"
    public function getIsSeekerAttribute()
    {
        return $this->user_type_id == UserType::SEEKER;
    }
    public function getIsAgentAttribute()
    {
        return $this->user_type_id == UserType::AGENT;
    }

    public function getRecentlyVerifiedAttribute()
    {
        return $this->hasVerified() && $this->user_verified_at->addMinutes(30)->isFuture();
    }

    public function getVerifiedAttribute()
    {
        return $this->hasVerified();
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
        'user_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // custom methods 
    public function markUserAsVerified()
    {
        $this->update([
            'user_verified_at' => now(),
        ]);
    }
    public function hasVerified()
    {
        return !is_null($this->user_verified_at);
    }
}
