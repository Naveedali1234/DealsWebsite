<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $guarded=[];

    public function groups(){
    	return $this->belongsToMany('App\Group');
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function deal_likes(){
    	return $this->hasMany('App\Deal_like');
    }
}
