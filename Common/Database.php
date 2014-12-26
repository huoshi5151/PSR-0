<?php
/**
 * Created by PhpStorm.
 * User: wangtao
 * Date: 14/12/21
 * Time: 下午12:46
 */

namespace Common;


class Database {
//   $db 为下面判断数据库连接是否已被创建做准备
    protected static $db;
    private function __construct(){
//        将构造方法声明位私有，不可以在外面直接new调用这个类
    }
    static function getInstance(){
//        在Database类内部定义一个获取实例的静态方法，调用自己的构造方法
        if(self::$db){
            return self::$db;
        }else{
            self::$db = new self();
            return self::$db;
        }

    }

    function where($where){
        return $this;
    }
    function order($order){
        return $this;
    }
    function limit($limit){
        return $this;
    }
} 