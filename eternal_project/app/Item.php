<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    protected $fillable = ['name','price','details','state','category','currency','rating'];

public function user(){
    return $this->belongsTo('App\User','user_id');
}
public function cart(){
    return $this->belongsTo('App\Cart','item_id');
}

public function rating(){

    return $this->hasMany('App\Rating','item_id');
}

public function comments(){
    return $this->hasMany(Comments::class,'item_id');


    $this->hasMany('App\Rating','item_id');

}


}
