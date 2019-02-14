<?php
/**
 * Created by PhpStorm.
 * User: Notnik_kg
 * Date: 31.01.2019
 * Time: 23:31
 */
include_once  ROOT.'/Models/Category.php';
include_once  ROOT.'/Models/Product.php';

class SiteController
{
public  function  actionIndex(){
$categories=array();
$categories=Category::getCategoriesList();


$latestProducts=array();
$latestProducts=Product::getLatesProducts(6);
   require_once (ROOT.'/Views/site/index.php');
   return true;
}
public  function actionContact(){
$email='';
$message='';
$result_mail=null;

    if (isset($_POST['mail_send'])){
$email=$_POST['email'];
$message=$_POST['msg'];
$errors=null;

if (!User::checkEmail($email)){
    $errors[]="Неправельный email";
}

if ($errors==false){
    $adminEmail="konderson97@gmai.com";
    $message="Текст:{$message}. От {$email}";
    $subject="Подержка";
    $result=mail($adminEmail,$subject,$message);
    $result_mail=true;


}

    }


require_once ROOT.'/Views/site/contact.php';
return true;
}



}