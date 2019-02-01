<?php
/**
 * Created by PhpStorm.
 * User: Notnik_kg
 * Date: 31.01.2019
 * Time: 23:31
 */
include_once  ROOT.'/Models/Category.php';
include_once  ROOT.'/Models/Product.php';

class SiteController
{
public  function  actionIndex(){
$categories=array();
$categories=Category::getCategoriesList();


$latestProducts=array();
$latestProducts=Product::getLatesProducts(4);
   require_once (ROOT.'/Views/site/index.php');
}
}