<?php
/**
 * Created by PhpStorm.
 * User: Notnik_kg
 * Date: 29.01.2019
 * Time: 23:02
 */
include_once ROOT.'/Models/Product.php';
include_once ROOT.'/Models/Category.php';
class ProductController
{

    public function actionView($id){
        $categories=array();
        $categories=Category::getCategoriesList();
        $productItem=Product::getProductById($id);
            require_once(ROOT.'/Views/site/product/view.php');


        return true;
    }





}