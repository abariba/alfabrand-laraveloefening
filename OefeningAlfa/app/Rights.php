<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rights extends Model
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
}
