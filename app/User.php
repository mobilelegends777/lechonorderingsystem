<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Events\Registered;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

   


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'utype', 'name', 'email', 'password', 'google_id', 'facebook_id', 'phone','address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    // public function is_user()


    // {

    //     if($this->utype=='User')

    //     {

    //         return true;
    //     }

    //     return false;

    // }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = true;
}
