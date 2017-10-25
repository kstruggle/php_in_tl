<?php


//方法修饰符 静态继承


class person{
    public static $nation  = '中国';
    public static function show()
    {
        echo '父类静态方法','<br>';
    }
}
class student extends person {

}
$stu = new student();
$stu::show();
echo $stu::$nation;