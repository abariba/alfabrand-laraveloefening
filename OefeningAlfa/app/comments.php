<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    public function likes(){
    	$this->hasMany('App\likes');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }


        public function comments()
    {
        return $this->belongsTo('App\comments');
    }
}
