<?php

//    方法修饰符  abstruct  抽象的


//抽象类
abstract class goods {
    protected $name;
    public function setname($name)
    {
        $this->name = $name;
    }
    abstract public function getname(); //抽象方法
}


//抽象类不允许实例化，必须在子类中重新实现才能实例化
class book extends goods{
    public function getname(){
        echo "《{$this->name}》";
    }
}
$book = new book();
$book->setname('PHP入门');
$book->getname();






