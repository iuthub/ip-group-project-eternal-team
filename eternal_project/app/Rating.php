<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model


{

    protected $fillable = ['item_id','mark_given_by_user'];
     public function items(){
         return $this->belongsTo(Item::class,'item_id');
     }


}
