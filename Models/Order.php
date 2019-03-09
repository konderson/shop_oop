<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26.02.2019
 * Time: 11:46
 */

class Order
{



    public static function  save($userName,$userPhone,$userComment,$user_id,$products){


        $products=json_encode($products);
        $db=DB::getConection();
        $sql="INSERT INTO products_order (user_name,user_phone,user_comment,user_id,products) 
       values (:user_name,:user_phone,:user_comment,:user_id,:products)  ";


        $result=$db->prepare($sql);
        $result->bindParam(":user_name",$userName,PDO::PARAM_STR);
        $result->bindParam(":user_phone",$userPhone,PDO::PARAM_STR);
        $result->bindParam(":user_comment",$userComment,PDO::PARAM_STR);
        $result->bindParam(":user_id",$user_id,PDO::PARAM_STR);
        $result->bindParam(':products',$products,PDO::PARAM_STR);
    return $result->execute();

    }
}