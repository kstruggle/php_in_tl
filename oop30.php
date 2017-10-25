<?php
//工厂模式
abstract class Product{   //抽象类
    abstract public function get_name();
}
class ProductA extends Product{
    public function get_name()    //实现抽象方法
    {
        echo '这是A<br>';
    }
}
class ProductB extends Product{
    public function get_name()
    {
        echo '这是B';
    }
}
//工厂模式
class product_factory{
    public static function create($num)
    {
        switch ($num){
            case 1:
                return new ProductA();
                break;
            case 2:
                return new ProductB();
                break;
        }
        return null;
    }
}
//传递不同的参数获取不同的对象
$objA = product_factory::create(1);
$objA ->get_name();
$objB = product_factory::create(2);
$objB->get_name();



