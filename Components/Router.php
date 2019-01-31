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

                /*echo '</br>Запрос пользователя'.$uri;
                echo '</br> Патерн сторка'.$uriPattern;
                echo '</br> Кто обробатывает'.$path;*/
//определяем внутрений маршрут preg_replace петрн строкуб, строку с внутриним путем , и откуда получаем фаил
                $uri = substr($uri, 1);
                $internalRoute=preg_replace("~$uriPattern~",$path,$uri);
               /* echo '</br> Нужно сформировать '.$internalRoute;
                echo '</br>';*/


                $segments=explode('/',$internalRoute);//создаем массив разделяем / .имя контроллер action

               $controlerName=array_shift($segments);//функция выбирает 1 элемент и добовляем Controllers

           $controlerName=ucfirst($controlerName).'Controller';


         $actionName='action'.ucfirst(array_shift($segments));//добовляе в начало слово action

                /* Формирум из оставшегося масса sigment массив парамтров  */
                $parameters=$segments;
                //подключаем фаил класса-контроллер$controllerFile=ROOT.'/а

                $controllerFile=ROOT.'/Controllers/'.$controlerName.'.php';
                if(file_exists($controllerFile)){

                    require_once($controllerFile);

                }
//создаем  необходимый обьект
                $controllerObject=new $controlerName;
              //  $result=$controllerObject->$actionName($parameters);

                if (count($parameters)>=1){

                    $result=call_user_func_array(array($controllerObject,$actionName),$parameters);

                }
                else{

                    $result=$controllerObject->$actionName();
                }

                if($result!=null){

                    break;
                }

            }

        }


    }

}