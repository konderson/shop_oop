<?php
/**
 * Created by PhpStorm.
 * User: Notnik_kg
 * Date: 04.02.2019
 * Time: 22:23
 */

class UserController
{

    public  function  actionRegister(){
$name='';
$password='';
$email='';
        if(isset($_POST['submit'])){
           $name=$_POST['name'];
            $email=$_POST['email'];
           $password=$_POST['password'];
        }
        require_once (ROOT.'/Views/site/register.php');
        return true;
    }
}