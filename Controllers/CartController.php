<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.02.2019
 * Time: 11:57
 */

class CartController
{

    public  function  actionAdd($id){
        Cart::addProduct($id);
        $referrer=$_SERVER['HTTP_REFERER'];
        header("Location:$referrer");
        return true;
    }

    public  function  actionAddAjax($id){

        echo  Cart::addProduct($id);
        return true;

    }


}