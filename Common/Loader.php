<?php
namespace Common;

class Loader {
    static function autoLoad($class){
//        var_dump($class);
        require BASEDIR.'/'.str_replace('\\','/',$class).'.php';
    }
}