<?php
return array(
    'cabinet/edit'=>'account/edit',
    'cabinet/'=>'account/index',
    'logout'=>'user/logout',
    'product/([0-9]+)'=>'product/view/$1',
    'category/([0-9]+)/page-([0-9])'=>'catalog/category/$1/$2',
    'login'=>'user/login',
'order'=>'cart/checkout',
    'news/([0-9]+)'=>'news/view/$1',
'register'=>'user/register',
    'news'=>'news/index',
    'contact'=>'site/contact',
    'cart/addAjax/([0-9]+)'=>'cart/addAjax/$1',
    'cart'=>'cart/index',//action in Cart Controller
    'cart/add/([0-9]+)'=>'cart/add/$1',
    ''=>'site/index',
);
//news/([a-z]+)/([0-9]+)'=>'news/view/$1/$2',//router  проверяет через регулярное вырожение