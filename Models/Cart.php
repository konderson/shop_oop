<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.02.2019
 * Time: 12:53
 */

class Cart
{

    static  function  addProduct($id){

        $id=intval($id);

        //массив для товаров в корзине

        $productInCart=array();

        if (isset($_SESSION['products'])){
            $productInCart=$_SESSION['products'];

        }
        //Если товар был уже раннее выбран пользователем то увеличиваем его количество 1=>3 тогда 1 ++=получаем 1=>4
        if(array_key_exists($id,$productInCart)){
            $productInCart[$id]++;
        }
        else{
            $productInCart[$id]=1;
        }
        $_SESSION['products']=$productInCart;
        return self::countCart();
       // echo  print_r($_SESSION['products']);die;

    }


    public  static function deleteProduct($id){

$productInCart=self::getProduct();
unset($productInCart[$id]);
$_SESSION['products']=$productInCart;

    }

    public  static  function  countCart(){

        if(isset($_SESSION['products'])){
            $coutnt=0;
            foreach ($_SESSION['products'] as $id=>$quantity){
                $coutnt=$coutnt+$quantity;
            }
            return $coutnt;
        }
        else{
            return 0;
        }
    }

public static  function  getProduct(){
        if(isset($_SESSION['products'])){

            return $_SESSION['products'];
        }
        return false;

}


public  static  function getTotalPrice($products){
        $productsInCart=self::getProduct();
        $total=0;
        if ($productsInCart){

            foreach ($products as $item){

                $total+=$item['price']*$productsInCart[$item['id']];

            }
            return $total;
        }
}
public  static  function  clear(){
        if ($_SESSION['products']){
            unset($_SESSION['products']);
        }
}

}