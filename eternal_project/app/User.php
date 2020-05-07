<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','contact','admin'
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
        'isAdmin'=>'boolean'
    ];

    public function item(){
      return $this->hasMany('App\Item','item_id');
    }
    public function carts(){
        return $this->hasOne('App\Cart','user_id');
    }

    public function isAdmin(){
        return $this->isAdmin;
    }


    public function comments(){
        return $this->hasMany(Comments::class,'user_id');
    }


}
