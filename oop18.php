<?php


//方法修饰符
// 确定当前对象  静态延时绑定

class person {
    public static $type = '人类';

    public function showperson()
    {
       // var_dump($this); //object(student)#1 (0) { }
        //echo self::$type;  //人类  self表示当前类的名字  不是调用的对象
        echo static::$type;  //类名::静态成员  当前对象所在的类
    }
}
class student extends person {
    public static $type = '学生';
    public function showstudent()
    {
        //var_dump($this); //object(student)#1 (0) { }
        //echo self::$type;   //学生
        echo static::$type;
    }
}

$stu = new student();
$stu->showperson();
echo '<hr>';
$stu->showstudent();