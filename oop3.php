<?php
//析构函数

class Student{
    private $name;

    //构造函数  初始化自动执行
    public function __construct($name)
    {
       $this->name = $name;
       echo "{$name}出生了",'<br>';
    }

    //析构函数  销毁时执行  destruct： 毁灭  页面执行完之后对象就自动销毁了
    public function __destruct()
    {
        echo '销毁了'.$this->name,'<br>';
    }
}
$stu1 = new Student('stu1');  //初始化的时候直接赋值  实例化的时候  出生的时候
unset($stu1);  //销毁

$stu2 = new Student('stu2');
$stu2 = 10;    //也是销毁  性质一样

$stu3 = new Student('stu3');













