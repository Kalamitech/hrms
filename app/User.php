<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin(){
        if ($this->access_level == 1) {
            return true;
        }
        return false;
    }

    public function isManager(){
        if ($this->access_level == 2 OR $this->access_level == 3) {
            return true;
        }
        return false;
    }

    public function isGEmployee(){
        if ($this->access_level == 4) {
            return true;
        }
        return false;
    }

    public function accessLevel()
    {
        return $this->belongsTo('App\AccessLevel', 'access_level', 'id');
    }
}
