<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    protected $fillable = ['user_id','item_id'];

    public function user(){
        $this->belongsTo('App\User','user_id');
    }

    public function items(){
        $this->hasMany('App\Item','item_id');
    }
// pokaji gde ty zapors delaew blya ya zapros k db?
// da
}
