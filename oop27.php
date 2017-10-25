<?php


//clone  克隆
class student{
}
$stu1 = new student();
var_dump($stu1);
echo '<br>';
$stu2 = clone $stu1;  //复制的是新的对象
var_dump($stu2);