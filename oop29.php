<?php


//单例模式  一个类只能有一个对象  三私一公

class Mysqldb{
    private static $instance;   //用来保存自己生成的实例化对象
    private function __construct() {//私有的构造函数阻止实例化
    }
    private function __clone(){  //私有的clone函数组织clone对象
    }
    public static function getInstance()
    {
        if (!self::$instance instanceof self){   //如果不是对象类型的
            self::$instance=new self();
        }
        return self::$instance;
    }
}
$db1 = Mysqldb::getInstance();
$db2 = Mysqldb::getInstance();
var_dump($db1,$db2);