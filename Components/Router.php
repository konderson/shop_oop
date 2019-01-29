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


        foreach ($this->routes as $uriPattern => $path){
            if(preg_match("~$uriPattern~",$uri)){//проверяет если удовлетворяет регуляроное выражение
                /*
                 * Определяем  какой контроллер
                 * и ACTION должны обробатывать запрос
                 * */
                $segments=explode('/',$path);//создаем массив разделяем / .имя контроллер action
               $controlerName=array_shift($segments).'Controller';//функция выбирает 1 элемент и добовляем Controllers
           $controlerName=ucfirst($controlerName);
         $actionName='action'.ucfirst(array_shift($segments));//добовляе в начало слово action

                //подключаем фаил класса-контроллер$controllerFile=ROOT.'/а

                $controllerFile=ROOT.'/Controllers/'.$controlerName.'.php';
                if(file_exists($controllerFile)){

                    require_once($controllerFile);

                }
//создаем  необходимый обьект
                $controllerObject=new $controlerName;
                $result=$controllerObject->$actionName();
                if($result!=null){
                    break;
                }

            }

        }


    }

}