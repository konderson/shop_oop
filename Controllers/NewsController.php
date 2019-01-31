<?php
/**
 * Created by PhpStorm.
 * User: Notnik_kg
 * Date: 29.01.2019
 * Time: 23:05
 */
include_once  ROOT.'/Models/News.php';
class NewsController{

    public  function  actionIndex(){

        $newsList=array();
        $newsList=News::getNewsList();
      require_once (ROOT.'/Views/news/index.php');
        return true;
    }

    public  function  actionView($id){

        if ($id){
            $newsItem=News::getNewsItemById($id);
            echo '<pre>';
            echo json_encode($newsItem);
            echo '<pre>';
            echo 'Action View';
        }

        return true;
    }
}