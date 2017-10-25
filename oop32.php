<?php
//魔术方法 __toString  __invoke

class student{
    function __toString()  //将对象当成字符串的时候 自动调用
    {
        return "这是一个对象，不能当字符串输出<br>";
    }
}
$stu = new student();
echo $stu;


class haha{
    function __invoke()  //将对象当成函数的时候
    {
        echo '这不是函数，不能这样调用<br>';
    }
}
$stu = new haha();
$stu();


class set{
    private $name;
    public function __set($key,$value)  //无法访问的时候 调用
    {
        echo $key,'<br>',$value;
    }
}
$stu = new set();
$stu->name='tom';