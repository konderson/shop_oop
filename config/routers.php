<?php
return array(
    ''=>'site/index',
    'news/([0-9]+)'=>'news/view/$1',

    'news'=>'news/index',
    'product'=>'product/list'
);
//news/([a-z]+)/([0-9]+)'=>'news/view/$1/$2',//router  проверяет через регулярное вырожение