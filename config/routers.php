<?php
return array(
    'cabinet/'=>'account/index',
    'product/([0-9]+)'=>'product/view/$1',
    'category/([0-9]+)/page-([0-9])'=>'catalog/category/$1/$2',
    'login'=>'user/login',
    'news/([0-9]+)'=>'news/view/$1',
'register'=>'user/register',
    'news'=>'news/index',

    ''=>'site/index',
);
//news/([a-z]+)/([0-9]+)'=>'news/view/$1/$2',//router  проверяет через регулярное вырожение