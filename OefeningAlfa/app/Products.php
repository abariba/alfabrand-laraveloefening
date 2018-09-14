<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function Comments()
  {
      return $this->hasMany(Comments::class);
  }

}
