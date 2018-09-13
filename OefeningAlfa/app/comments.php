<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Comments extends Model
{
     protected $fillable = ['body'];
    public function likes(){
        $this->hasMany('App\likes');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
