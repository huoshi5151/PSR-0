<?php
define('BASEDIR',__DIR__);
include BASEDIR.'/Common/Loader.php';
spl_autoload_register('\\Common\\Loader::autoLoad');    //当调用没有被定义的函数时，会触发此函数，按照命名空间的路径找到函数

$db = Common\Factory::createDatabase();

/*$db = new Common\Database;

$db->where("id=1")->order("id desc")->limit("10");*/


//Common\Object::test();

//App\Controller\Home\Index::index();
/*
 * 栈的数据结构，先进后出
 * */
/*$stack = new SplStack();
$stack->push("data\n");
$stack->push("data1\n");

echo $stack->pop();
echo $stack->pop();*/

/*
 * 队列数据结构，先进先出
 * */
/*$queue = new SplQueue();
$queue->enqueue("data\n");
$queue->enqueue("data1\n");

echo $queue->dequeue();
echo $queue->dequeue();*/

//$array = new SplFixedArray();