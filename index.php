<?php
define('BASEDIR',__DIR__);
include BASEDIR.'/Common/Loader.php';
spl_autoload_register('\\Common\\Loader::autoLoad');    //当调用没有被定义的函数时，会触发此函数，按照命名空间的路径找到函数

Common\Object::test();

App\Controller\Home\Index::index();