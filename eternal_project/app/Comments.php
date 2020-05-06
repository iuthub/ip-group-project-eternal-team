<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['user_id','item_id','comment'];


    public function item(){
        return $this->belongsTo(Item::class,'item_id');
    }
    public function uset(){
        return $this->belongsTo(User::class,'user_id');
    }

}
