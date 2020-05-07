<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartBought extends Model
{

    protected $fillable=['user_id','item_id'];
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function items(){
        return $this->hasMany('App\Item','item_id');
    }
}
