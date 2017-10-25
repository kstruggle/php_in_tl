<?php


//接口 interface 全是抽象方法
interface ipict1{
    function test1();
}
interface ipict2{
    function test2();
}
//接口允许多重实现  （多重继承）
class myClass implements ipict1,ipict2{
    public function test1()
    {
        echo '实现接口1的test1方法<br>';
    }
    public function test2()
    {
       echo '实现接口2的test2方法<br>';
    }
}

$obj = new myClass();
$obj->test1();
$obj->test2();