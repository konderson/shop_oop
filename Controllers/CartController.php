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

    public  function  actionIndex(){
        $categories=array();
        $categories=Category::getCategoriesList();

        $productsInCart=false;
        $productsInCart=Cart::getProduct();
        if($productsInCart){
            $productsId=array_keys($productsInCart);
            $products=Product::getProductsByIds($productsId);
            $totalPrice=Cart::getTotalPrice($products);
        }
        require_once (ROOT.'/Views/site/cart/cartindex.php');
        return true;
    }



    public  function  actionDelete($id){
        Cart::deleteProduct($id);

     header("Location:/cart");

    }

    public  function actionCheckout()
    {

//категории для левог блока
        $categories = array();
        $categories = Category::getCategoriesList();
 $result=false;

        //status успешного формленого заказа

        //проверка форма отправлена


        if (isset($_POST['submit'])) {

            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];

            $errors = false;

            if (!User::checkName($userName)) {
                $errors[] = "Непровлено введено имя !";

            }
            if (!User::CheckPhone($userPhone)) {
                $errors[] = "Неверный номер телефона";
            }
            // проверка форма заполнена корректо
            if ($errors == false) {
                //форма заполена корректно сохраняем заказ в бд

                //соберяем информацию о заказе

                $productInCart=Cart::getProduct();

                //проверяем авторизовался ли пользователь
                if (User::isGuest()){
                    $userId=null;
                }
                else{
                    $userId=User::checkLogged();

                }
                //сохраняем заказ в бд

                $result=Order::save($userName,$userPhone,$userComment,$userId,$productInCart);

                if ($result){
                    //оповещаем админа о совершенном заказе

                    $adminEmai="konderson97@gmail.com";
                    $message="message/admin/ordes";
                    $subject="Новый заказ";
                    mail($adminEmai,$subject,$message);

                    //Очищаем корзину

                    Cart::clear();


                }
            }
            else{//форма заполненена не корректно

                $result=false;
                $productInCart=Cart::getProduct();
                $productsIds=array_keys($productInCart);
                $products=Product::getProductsByIds($productsIds);
                $totalPrice=Cart::getTotalPrice($products);
                $totalQuantity=Cart::countCart();

            }


        }
        //если форма не отправлена
        else{

            //получаем данные из корзины

            $productInCart=Cart::getProduct();

            //проверяем в корзине есть товар ?

            if($productInCart==false){
                /**
                 * если в корзине нет товара ,переадрисуем его на главную страницу сайта
                 */
                header("Location:/");

            }
            else{
                //в корзине есть товар

                $productsIds=array_keys($productInCart);//id товаров в корзине
                $products=Product::getProductsByIds($productsIds);//массив из бд продуктов в корзине
                $totalPrice=Cart::getTotalPrice($products);//получаем все стоимость товаров в корзине
                $totalQuantity=Cart::countCart();



                $userName=false;
                $userPhone=false;
                $userComment=false;

                //проверяем пользователь автроризован ?

                if (User::isGuest()){

                    //значит значение формы пустое
                }
                else{
                    //пользователь авторизован
                    //получаем данные из бд
                    $userId=User::checkLogged();//Получаем id


                    $user=User::getUserById($userId);
                    $userName=$user['name'];

                }


            }

        }
require_once (ROOT.'/Views/site/account/order.php');
        return true;
}
}