<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name','price','details','state','category'];

public function user(){
    return $this->belongsTo('App\User','user_id');
}


}
