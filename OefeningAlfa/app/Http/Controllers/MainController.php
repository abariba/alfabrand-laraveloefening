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
  $users = users::find($id);

    $comments = False;
    $likes = False;
    $DeleteOwnedComments = False;
    $DeleteComments = False;
    $AddProducts = False;
    $AddUsers = False;

      switch ($users->level) {
        case 0:  //Non-logged in users = no rights
          break;

          case 1: //Logged in users can comment & delete & like
          $comments = true;
          $likes = true;
          $DeleteOwnedComments = true;
            break;

            case 2:  //Webshop owners admin rights
            $comments = true;
            $likes = true;
            $DeleteOwnedComments = true;
            $DeleteComments = true;
            $AddProducts = true;
              break;

              case 3:  //SystemManager
              $comments = true;
              $likes = true;
              $DeleteOwnedComments = true;
              $DeleteComments = true;
              $AddProducts = true;
              $AddUsers = true;
                break;
              }
$rights = array($comments,
$likes,
$DeleteOwnedComments,
$DeleteComments,
$AddProducts,
$AddUsers);

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
