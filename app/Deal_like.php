<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal_like extends Model
{
	protected $guarded = [];
    public function deal(){
    	return $this->belongsTo('AP\Deal');
    }
}
