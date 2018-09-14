<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Comment extends Model
{
    protected $fillable = ['body']; //Onnodig? -Joris
    public function likes(){
        $this->hasMany('App\likes');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

      public function Products()
    {
      return $this->belongTo(Products::class);
    }

}
