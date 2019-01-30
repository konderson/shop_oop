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
        echo '<pre>';
        print_r($newsList);
        echo '<pre>';

        return true;
    }

    public  function  actionView($id){

        if ($id){
            $newsItem=News::getNewsItemById($id);
            echo '<pre>';
            print_r($newsItem);
            echo '<pre>';
            echo 'Action View';
        }

        return true;
    }
}