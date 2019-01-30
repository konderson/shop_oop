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
        $user='t';
        $password='root';
        $db = new PDO('mysql:host=127.0.0.1;dbname=mvc_site', $user, $password);

$newList=array();
$result=$db->query('SELECT id,title,date,short_conent'
.'FROM news '
    .' ORDER BY data DESC'
    .'LIMIT 10');

$i=0;
while ($row=$result->fetch()){
    $newsList[$i]['id']=$row['id'];
    $newList[$i]['title']=$row['title'];
    $newList[$i]['date']=$row['data'];
    $newList[$i]['short_content']=$row['short_content'];
    $i++;
}

        return $newList;
}

}