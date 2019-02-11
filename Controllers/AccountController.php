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
    require_once(ROOT . '/Views/site/account/personal_account.php');
    return true;
}

}