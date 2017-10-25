<?php

//继承 extends

class Person{
    private $name;      //私有的 子类也不能调用

    public function getName()
    {
        echo '人都有名字',"<hr>";
    }
}

//student  继承了（extends）  person 类
class Student extends Person{
    public function show()
    {
        echo $this->name;
    }
}


$per = new Student();   //继承了父类的方法
$per->getName();        //echo '人都有名字';
var_dump($per);
$per->show();    //继承了 name 但不能使用
