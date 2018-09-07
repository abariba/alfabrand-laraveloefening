<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RightsModel extends Model
{

  public function rights($user_id)
{


DB::table('level')->find($user_id);

  $comments = False;
  $likes = False;
  $DeleteOwnedComments = False;
  $DeleteComments = False;
  $AddProducts = False;
  $AddUsers = False;

    switch (variable) {
      case 0:  //Non-logged in users = no rights
      return[$comments,$likes,$DeleteOwnedComments,
      $DeleteComments,$AddProducts,$AddUserss];
        break;

        case 1: //Logged in users can comment & delete & like
        $comments = true;
        $likes = true;
        $DeleteOwnedComments = true;
        return[$comments,$likes,$DeleteOwnedComments,
        $DeleteComments,$AddProducts,$AddUserss];
          break;

          case 2:  //Webshop owners admin rights
          $comments = true;
          $likes = true;
          $DeleteOwnedComments = true;
          $DeleteComments = true;
          $AddProducts = true;
          return[$comments,$likes,$DeleteOwnedComments,
          $DeleteComments,$AddProducts,$AddUserss];
            break;

            case 3:  //SystemManager
            $comments = true;
            $likes = true;
            $DeleteOwnedComments = true;
            $DeleteComments = true;
            $AddProducts = true;
            $AddUsers = true;
            return[$comments,$likes,$DeleteOwnedComments,
            $DeleteComments,$AddProducts,$AddUserss];
              break;

      default:
      return[$comments,$likes,$DeleteOwnedComments,
      $DeleteComments,$AddProducts,$AddUserss];
        break;
        }
    }
}
