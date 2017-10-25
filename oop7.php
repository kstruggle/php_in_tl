<?php

//继承 extends  在子类中调用父类的属性和方法

class Person{
    public function __construct()
    {
        echo '这是父类的构造函数','<br>';
    }
}


class Student extends Person{
    public function __construct()
    {
        parent::__construct();   //调用父类的构造函数
     // Person::__construct();    这个也可以
        echo '这是子类的构造函数';
    }
}


$per = new Student();


