<?php
$string="Ученикgir пошел в школу в 1942  закончил в 2835 ";
/*
$string='21-01-2019';
$pattern='/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
$replacement='Month $2, Day $1 , Year $3';
echo  preg_replace($pattern,$replacement,$string);
die;


//$patern='/20[0-1][0-8]/';
/*$patern='/[0-3]{2,3}/';

$resolt=preg_match($patern,$string);

var_dump($resolt);*/


ini_set('display_errors',1);
error_reporting(E_ALL);//настраеваем отображение всех ошибок


define('ROOT',  dirname(__FILE__));
require_once (ROOT.'/Components/Router.php');//подключаем файл Route.php
//проверка на наличие в массиве routers.php



/*  step 3 connect to DB*/

/* step 4 call Router*/

$router=new Router();
$router->run();
?>