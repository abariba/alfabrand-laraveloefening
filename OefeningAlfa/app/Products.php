<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function Comment()
  {
      return $this->hasMany(Comment::class);
  }

}
