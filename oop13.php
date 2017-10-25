<?php


//私有属性的继承和重写
class A {
    private $name = 'PHP';
    public function showA()
    {
        echo '<pre>';
        var_dump($this);
        echo $this->name;
    }
}
class B extends A {
    private $name = 'Mysql';
    public function showB()
    {
        echo '<pre>';
        var_dump($this);
        echo $this->name;
    }
}

$obj = new B();
$obj->showA();
$obj->showB();