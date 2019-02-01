<?php
/**
 * Created by PhpStorm.
 * User: Notnik_kg
 * Date: 29.01.2019
 * Time: 23:02
 */

class ProductController
{

    public function actionView($id){



            require_once(ROOT.'/Views/site/product/view.php');


        return true;
    }

}