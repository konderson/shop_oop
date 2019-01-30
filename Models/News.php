<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 30.01.2019
 * Time: 14:05
 */

class News
{
    public static function getNewsItemById($id)
    {

    }

    public static function getNewsList()
    {

        $host='127.0.0.1';
        $database="basei";
        $user='konderson';
        $password='220831';

        $db = new PDO('mysql:host=127.0.0.1;dbname=mvc_site', $user, $password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$newsList=array();
$result=$db->query('SELECT *'
.'FROM news '
    .'ORDER BY data DESC '
    .'LIMIT 10');

$i=0;
while ($row=$result->fetch()){

    $newsList[$i]['id']=$row['id'];
    $newsList[$i]['title']=$row['title'];
    $newsList[$i]['date']=$row['data'];
    $newsList[$i]['short_content']=$row['short_content'];
    $i++;
}

        return $newsList;
}

}