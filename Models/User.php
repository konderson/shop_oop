<?php
/**
 * Created by PhpStorm.
 * User: Notnik_kg
 * Date: 04.02.2019
 * Time: 22:26
 */

class User
{
 static function register(){

}

static  function checkName($name)
{
    if (strlen($name) >= 2) {
        return true;
    } else {
        return false;
    }

}
     static  function checkPassword($password){
         if(strlen($password)>=2){
             return true;
         }
         else{
             return false;
         }

     }


     static  function  checkEmail($email){
     if (filter_var($email,FILTER_VALIDATE_EMAIL)){
         return true;
     }
     else{
         false;
     }
     }
}