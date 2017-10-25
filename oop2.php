<?php
//封装
//访问修饰符的作用是用来做封装的。
//封装的目的是用来有选择性提供数据和访问



//构造方法 构造函数   用于初始化  __construct构造
class Student{
    private $name;
    private $sex;
    public function __construct()  //两个下划线   初始化执行
    {
        echo '锄禾日当午';
    }
}
$stu = new Student();

echo '<hr>';



class Student2 {
    private $name;
    private $sex;
    //构造函数  初始化值
    public function __construct($name,$sex)
    {
        $this->name=$name;
        $this->sex=$sex;
    }

    public function show()
    {
        echo $this->name,'<br>';
        echo $this->sex;
    }
}
$stu2 = new Student2('tom','男');  //初始化的时候直接赋值  实例化的时候  出生的时候
$stu2->show();






