<?php
/**
 * Created by PhpStorm.
 * User: Notnik_kg
 * Date: 11.02.2019
 * Time: 22:18
 */

class AccountController
{
public function actionIndex(){

  $userId=User::checkLogged();

  $user=User::getUserById($userId);
    require_once(ROOT . '/Views/site/account/personal_account.php');
    return true;
}


public  function  actionEdit(){
    //проверяем залогинился ли пользователь .Если да то получаем его id в противном случаее переправляем на страницу входа
    $user_id=User::checkLogged();
    //Получаем юзера из бд по id
    $user=User::getUserById($user_id);


    $name=$user['name'];
    $password=$user['password'];

    $email=$user['email'];




    if(isset($_POST['edit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];


        $errors=null;
        if(!User::checkName($name))
        {
            $errors[]="Имя должно быть больше 2-х символов";
        }

        if(!User::checkEmail($email))
        {
            $errors[]="Не коректно введен пароль";
        }

        if(!User::checkPassword($password)){
            $errors[]="Пароль не должен быть короче 6-ти символов";
        }

        if (!isset($errors)){

          $result_edit=User::edit($user_id,$name,$email,$password);
        }
    }

    require_once ROOT.'/Views/site/account/account_edit.php';
    return true;


}
}