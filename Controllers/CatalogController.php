<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 01.02.2019
 * Time: 14:48
 */
include_once  ROOT.'/Models/Category.php';
include_once  ROOT.'/Models/Product.php';
class CatalogController
{

    public  function  actionCategory($categoryId,$page=1){
        $categories=array();
        $categories=Category::getCategoriesList();

$categoryProducts=array();
        $categoryProducts=Product::getProductsListByCategory($categoryId,$page);


        require_once (ROOT.'/Views/site/product/category.php');

        return true;
    }


}