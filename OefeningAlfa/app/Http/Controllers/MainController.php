<?php

namespace App\Http\Controllers;

use App\users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MainModel;

class MainController extends Controller
{
  public function homepage()
{
  return view('pages.index');
}

public function comment()
{
return view('pages.comments');
}

public function testing($id)
{
return view('pages.test.testing',compact ('rights'));
}

  public function heren()
{
return view('pages.categories.heren');
}

public function dames()
{
return view('pages.categories.dames');
}

public function kinderen()
{
return view('pages.categories.kinderen');
}

  public function cart()
{
return view('pages.cart');
}

}
