<?php

//继承 extends  在子类中调用父类的属性和方法  parent 代表的就是父类

class Person{
    protected $national= '中国';
}


class Student extends Person{
    public function show()
    {
      //$p = new Person();   //实例化父类
      $p = new parent();   //实例化父类
      echo $p->national,'<br>';



//      echo $this->national;
    }
}


$per = new Student();
$per->show();

