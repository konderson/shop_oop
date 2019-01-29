<?php
$string="Ученикgir пошел в школу в 1942  закончил в 2835 ";

//$patern='/20[0-1][0-8]/';
/*$patern='/[0-3]{2,3}/';

$resolt=preg_match($patern,$string);

var_dump($resolt);*/


ini_set('display_errors',1);
error_reporting(E_ALL);//настраеваем отображение всех ошибок


define('ROOT',  dirname(__FILE__));
require_once (ROOT.'/Components/Router.php');//подключаем файл Route.php

/*  step 3 connect to DB*/

/* step 4 call Router*/

$router=new Router();
$router->run();
?>