<?php

//oop  面向对象编程

//对象是  属性和方法、


//类
class Student{
    public $name = '李白';   //public 访问修饰符
    public $sex = '男';
    public function ceshiFn(){
        echo 'function 是同一个空间';
    }
}
//实例化对象
$stu1 = new Student();  //实例化一个对象  并把对象付给 stu1 变量
$stu2 = new Student();

//调用属性和方法  ->
echo $stu1->name,'<br>';
echo $stu2->name,'<br>';

//给变量赋值  不同的命名空间
$stu1->name = 'tom';
$stu2->name = 'berry';
echo $stu1->name;
echo $stu2->name;

echo '<hr>';
//增加私有属性
$stu1->add = '北京';
var_dump($stu1);

echo '<hr>';
//删除属性
unset($stu2->name);
var_dump($stu2);

echo '<hr>';
//判断属性是否存在
var_dump(isset($stu1->name),isset($stu2->name));


echo '<hr>';


//方法  function
class Stu{
    public function show(){
        echo '锄禾日当午';
    }
}


//show() 是同一个空间  属性是一个
$stu3 = new Stu();
$stu3->show();

$stu4 = new Stu();
$stu4->show();



echo "<br>-------访问修饰符---------<br>";

//访问修饰符
class Student1{
    private $name;     // private   私有的 只能在类内部访问
}
$stu5 = new Student1();
//echo $stu5->name;  //报错   无法访问私有属性


echo "<br>-------访问修饰符2---------<br>";

class Student2{
    private $name;
    private $sex;
    //给私有属性赋值
    public function setInfo($name,$sex){
        //过滤数据
        if ($name == ''){
            echo '姓名不能为空';
            exit();
        }
        if ($sex != '男'&& $sex != '女'){
            echo '性别不正确';
            exit();
        }

        //赋值 给属性值
        $this->name=$name;  //this  表示调用当前方法的对象
        $this->sex=$sex;
    }
    //取值
public function getInfo()
{
    echo '姓名：'.$this->name,'<br>';
    echo '性别：'.$this->sex,'<br>';
}
}
$stu6 = new Student2();
$stu6->setInfo('tom','男');
$stu6->getInfo();







