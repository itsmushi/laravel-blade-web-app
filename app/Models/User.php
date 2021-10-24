<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'account_type',
        'firstname',
        'lastname',
        'avator',
        'feature',
        'about',
        'short_description',
        'experience_years',
        'location',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function education()
    {
        return $this->hasMany(Education::class, 'user_id');
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class, 'user_id');
    }

    public function jobs()
    {
        return $this->hasMany(Job::class, "user_id");
    }

    public function applications()
    {
        return $this->belongsToMany(Job::class, 'job_user');
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, "users_skills", 'user_id', 'skill_id');
    }

}
