<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentLikesModel extends Model
{
	public function likes(){
    	return $this->hasMany(Likes::class);
	}
}
