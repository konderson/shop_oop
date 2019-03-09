<?php
/**
 * Created by PhpStorm.
 * User: Notnik_kg
 * Date: 04.02.2019
 * Time: 22:26
 */

class User
{
    static function register($name, $email, $password)
    {

        $db = DB::getConection();
       // $result=$db->query("INSERT INTO user (name,email,password) VALUES ('$name','$email','$password')");
        $sql = "INSERT INTO user (name,email,password) VALUES (:name,:email,:password)";
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();


    }

static function  getUserDate($email,$password){

        $db=DB::getConection();
        $sql="SELECT id FROM user WHERE  email=:email and password=:password";
        $result=$db->prepare($sql);
        $result->bindParam(':email',$email,PDO::PARAM_STR);
        $result->bindParam(':password',$password,PDO::PARAM_STR);
        $result->execute();
        $user=$result->fetch();
        if($user){

            return $user['id'];
        }
        return false;

    }
    static  function getUserById($user_id){
    $db=DB::getConection();
    $sql="SELECT * FROM user where id=:id";
    $result=$db->prepare($sql);
    $result->bindParam(":id",$user_id,PDO::PARAM_STR);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $result->execute();
    return $result->fetch();


}

  static  function edit($id,$name,$email,$password){
        $db=DB::getConection();
        $sql="UPDATE user SET name=:name,email=:email,password=:password WHERE  id=:id";
        $result=$db->prepare($sql);
        $result->bindParam(':id',$id,PDO::PARAM_STR);
        $result->bindParam(':email',$email,PDO::PARAM_STR);
        $result->bindParam(':name',$name,PDO::PARAM_STR);
        $result->bindParam(':password',$password,PDO::PARAM_STR);
        $result->execute();
        $result->execute();

  }

static  function checkLogged(){

        if(isset( $_SESSION['user'])){

            return $_SESSION['user'];
        }
           header("Location: /register/");

}

    static  function isGuest(){

        if(isset( $_SESSION['user'])){

            return false;
        }
return true;

    }

static function  auth($user_id){

        if (!isset($_SESSION['user']))
        {
            $_SESSION['user']=$user_id;
            return $_SESSION['user'];
        }

}

    static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        } else {
            return false;
        }

    }

    static function checkPassword($password)
    {
        if (strlen($password) >= 2) {
            return true;
        } else {
            return false;
        }

    }


static function  CheckPhone($userPhone){
    if (strlen($userPhone) >= 9) {
        return true;
    } else {
        return false;
    }
}


    static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            false;
        }
    }

    static function checkEmailExists($email)
    {
        $db = DB::getConection();
        $sql='SELECT count(*) FROM user WHERE  email=:email';

$email="'$email'";

        $result=$db->query("SELECT email FROM user where  email=".$email);
        $result=$result->fetch();

        if  (!empty($result)) {
echo "true";
return true;
        }
        else{
            echo false;
            return false;
        }




    }

}