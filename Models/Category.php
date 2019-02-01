<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 01.02.2019
 * Time: 12:18
 */

class Category
{
public  static  function  getCategoriesList(){


    $db=DB::getConection();
    $categoryList=array();
    $result=$db->query('SELECT id,name FROM category ORDER  by sort_order ASC ');

    $i=0;

    while ($row=$result->fetch()){

        $categoryList[$i]['id']=$row['id'];
        $categoryList[$i]['name']=$row['name'];

        $i++;

    }
    return $categoryList;

}




}