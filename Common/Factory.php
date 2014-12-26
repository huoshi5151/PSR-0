<?php
/**
 * Created by PhpStorm.
 * User: wangtao
 * Date: 14/12/21
 * Time: 下午1:09
 * 工厂模式+单例模式
 */

namespace Common;


class Factory {
    static function createDatabase(){
        $db = Database::getInstance();  //这里无论调用多少次，在getIntance方法中只有一个数据库连接
        return $db;
    }
} 