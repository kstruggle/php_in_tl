<?php


//抽象类
abstract class abs{
    abstract function test1();
}
//接口 interface 全是抽象方法
interface ipict{
    function test2();
}

//继承抽象类的同时实现接口   先继承类 后实现接口  否则会报错
class myclass extends abs implements ipict {
    public function test1()
    {
        echo '继承了抽象类abs的test1<br>';
    }

    public function test2()
    {
        echo '实现了接口的test2';
    }
}
$ddd = new myClass();
$ddd->test1();
$ddd->test2();