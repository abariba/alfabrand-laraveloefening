<?php
namespace App;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    public function comments()
    {
        return $this->hasMany('App\comments');
    }
<<<<<<< HEAD
    public function likes()
    {
=======

    public function comments(){
>>>>>>> master
        return $this->hasMany('App\likes');
    }
}