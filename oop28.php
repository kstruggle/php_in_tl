<?php


//clone  克隆  __clone 自动执行
class student{
    private $is_clone = false;

    public function __clone()
    {
        $this->is_clone = true;
    }
}
$stu1 = new student();
var_dump($stu1);
echo '<br>';
$stu2 = clone $stu1;
var_dump($stu2);   //true 当执行clone 指令的时候自动执行__clone 函数
echo '<br>';