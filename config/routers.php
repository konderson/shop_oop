<?php
return array(
    'news/([a-z]+)/([0-9]+)'=>'news/view/$1/$2',//router  проверяет через регулярное вырожение
    'news'=>'news/index',
    'product'=>'product/list'
);