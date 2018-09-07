<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MainModel;

class MainController extends Controller
{
  public function homepage()
{
  return view('pages.index');
}


public function login()
{
return view('pages.login');
}

public function testing()
{
return view('pages.testing');
}

public function joost()
{
return view('pages.joost');
}

}
