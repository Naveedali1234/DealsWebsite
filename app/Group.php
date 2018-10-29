<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
	protected $guarded = [];
    public function deals(){
    	return $this->belongsToMany('App\Deal');
    }
}
