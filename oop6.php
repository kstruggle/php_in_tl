<?php

//继承 extends  在子类中调用父类的属性和方法

class Person{
    protected $name = '李白';      //受保护的 子类可以调用

    protected function getName()   //一样
    {
        echo '人都有名字',"<hr>";
    }
}

//student  继承了（extends）  person 类 的所有属性
class Student extends Person{
    public function show()
    {
        echo $this->name;
        $this->getName();
    }
}


$per = new Student();   //继承了父类的方法
$per->show();        //echo '人都有名字';

