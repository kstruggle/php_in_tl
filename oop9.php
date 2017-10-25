<?php

//继承 extends  在父类中调用子类的属性和方法  protected  受保护的
//protected  修饰的成员可以在整个继承链上访问

class A{
     public function show()
    {
        echo $this->num;
    }
}

class B extends A{
    protected $num= 10;
}

$obj = new B();
$obj->show();
