<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MainModel;

class MainController extends Controller
{
  public function homepage()
{
  return view('layouts.master');
}


// public function homepage()
// {
// return view('layouts.master');
// }

}
