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
        $errors=array();
        if(isset($_POST['submit'])){
           $name=$_POST['name'];
            $email=$_POST['email'];
           $password=$_POST['password'];


$result=false;


           if(User::checkName($name)){

             //  echo "</br> $name OK";
           }
           else{
               $errors[]="Имя не должно быть короче 2-х символов";
           }


           if (User::checkEmail($email)){
               //echo " </br> $email OK";
           }
           else{
               $errors[]="Некорректо введен Email";
           }

           if(User::checkPassword($password)){

             //  echo "</br> $password OK";
           }
           else{
               $errors[]="Пароль не должен быть короче 6-сти символов ";
           }



           if(User::checkEmailExists($email)){

              $errors[]="Такой Email уже используется";
        }
           if (count($errors)==NULL ){
              $result= User::register($name,$email,$password);


           }
        }

        require_once (ROOT.'/Views/site/register.php');
        return true;
    }


    static function  actionLogin(){
        $email="";
        $password="";
        if(isset($_POST['login'])){
           $email=$_POST['email'];
           $password=$_POST['password'];
           $errors_sign=false;

           if(!User::checkEmail($email))
           {
               $errors_sign[]="Неправельный email";
           }
           if (!User::checkPassword($password)){
               $errors_sign[]="Пароль не должен быть короче 6-ти символов";
           }
           $userId=User::getUserDate($email,$password);
           if($userId==false)
           {
               $errors_sign[]="Неправельные данные для входа на сайт ";
           }
           else{
               //Если пользователь вошел то сохраняем в сессию
               //
               User::auth($userId);

               //перепровляем на страницу кабинета

               header("Location: /cabinet/");
           }

        }
        require_once (ROOT.'/Views/site/register.php');
        return true;

    }



}