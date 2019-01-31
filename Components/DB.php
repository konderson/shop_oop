<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 31.01.2019
 * Time: 13:16
 */

class DB
{
public  static function  getConection()
{
    $paramsPath = ROOT . '/config/db_params.php';
    $params=include($paramsPath);

    $dsn="mysql:host={$params['host']};dbname={$params['db_name']}";
    $db=new PDO($dsn,$params['user'],$params['password'],[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    return $db;
}
}