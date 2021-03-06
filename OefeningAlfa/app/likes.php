<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class likes extends Model
{
	public function user(){
    	return $this->belongsTo('App\User');
	}

	public function likes(){
    	return $this->belongsTo(comment::class);
	}

	public function like(){
		return $this->where("like","=",1);
	}

}
