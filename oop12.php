<?php


//多态   子类改写相同名称的父类方法 ：方法重写
class Person{
    public function show(){
        echo '父类';
    }
}
class Student extends Person{
    public function show()
    {
        echo '子类';
    }
}
$stu = new Student();
$stu->show();