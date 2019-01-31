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
$id=(int)$id;

if($id){

 $db=DB::getConection();
    $result=$db->query('SELECT * FROM news WHERE id='.$id);
$result->setFetchMode(PDO::FETCH_ASSOC);
    $newsItem=$result->fetch();

    return $newsItem;
}

    }

    public static function getNewsList()
    {
$db=DB::getConection();

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
    $newsList[$i]['author']=$row['author_name'];
    $i++;
}

        return $newsList;
}

}