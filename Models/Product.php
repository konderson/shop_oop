<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 01.02.2019
 * Time: 13:03
 */

class Product
{
const  SHOW_BY_DEFAULT=3;


public  static  function getLatesProducts($count=self::SHOW_BY_DEFAULT){//метод для выборки последних 10-ти товаров

    $db=DB::getConection();

    $resolt=$db->query('SELECT * FROM product WHERE status=1 ORDER  BY id DESC  LIMIT '.$count);

    $productsList=array();

    $i=0;

    while ($row=$resolt->fetch()){
        $productsList[$i]['id']=$row['id'];
        $productsList[$i]['name']=$row['name'];
        $productsList[$i]['price']=$row['price'];
        $productsList[$i]['image']=$row['image'];
        $productsList[$i]['code']=$row['code'];
        $productsList[$i]['is_new']=$row['is_new'];

       $i++;
    }

    return $productsList;
}


    public static  function  getProductsListByCategory($categoryId=false,$page){
$ofcet=($page-1)*self::SHOW_BY_DEFAULT;
        $db=DB::getConection();
        $productsList=array();
        $resolt=$db->query("SELECT id,name,price,image,is_new,code FROM product 

WHERE status='1' AND category_id='$categoryId'
ORDER  BY id asc LIMIT ".self::SHOW_BY_DEFAULT.' OFFSET '.$ofcet);
        $i=0;
        while ($row=$resolt->fetch()){
            $productsList[$i]['id']=$row['id'];
            $productsList[$i]['name']=$row['name'];
            $productsList[$i]['price']=$row['price'];
            $productsList[$i]['image']=$row['image'];
            $productsList[$i]['code']=$row['code'];
            $productsList[$i]['is_new']=$row['is_new'];
$i++;
        }

return $productsList;
}


public  static function  getProductById($id){


    $db=DB::getConection();
    $result=$db->query('SELECT * FROM product WHERE  id='.$id.'.');
    $productItem=array();
    $productItem=$result->fetch();
    return $productItem;

}

public  static  function  getTotalProductInCategory($categoryId){
    $db=DB::getConection();
    $result=$db->query('SELECT count(id)AS count from product WHERE status=1 AND category_id='.$categoryId);
     $row= $result->fetch();
     return $row['count'];
}
}