<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 29.01.2019
 * Time: 17:03
 */

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath=ROOT.'/config/routers.php';
        $this->routes=include($routesPath);

    }

    /**
    возвращает страку запрса на сервер
     *retern @string
     */
   private  function  getUri(){
       if(!empty($_SERVER['REQUEST_URI'])){
        return   trim($_SERVER['REQUEST_URI']);

       }
   }
    public function run(){
$uri=$this->getUri();

        echo $uri;


    }

}