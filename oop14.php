<?php


//方法修饰符 static final abstruct

class Oer{
    public static $national = "中国";   //静态可以直接访问  class 生成时直接就有空间
    public static function show()
    {
        echo '这是一个静态方法';
    }
}
echo Oer::$national,'<br>';    //直接访问
Oer::show();




class student{
    public $name = '名字';
    public static $na = '尼玛';
    public static function show()
    {
        echo '<br>不能访问普通成员';
       echo $this->name;

    }
}
student::show();

