<?php
//迭代器 iterator   用来 遍历对象中的属性--数组
//Iterator::   迭代器 用来遍历对象的属性  是个php预定义的接口

//学生类
class student{
    private $name;
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function __get($key)
    {
        return $this->$key;
    }
}
//班级类  继承 预定义接口 迭代器 iterator
class PHP implements Iterator{
    private $list = array();  //学生数组
    public function addstu(student $stu)  //给班级添加学生
    {
        $this->list[]= $stu;
    }
    //实现iterator 接口 的抽象方法
    public function rewind()  //指针复位
    {
        reset($this->list); //复位到迭代器的第一个元素
    }
    public function valid()  //判断当前指针位置 验证是否有效
    {
        return key($this->list) !== null;
    }
    public function current()   //返回当前元素
    {
        return current($this->list);
    }
    public function key()   //返回当前元素的键
    {
        return key($this->list);
    }
    public function next()  //指针下移
    {
        next($this->list);
    }
}

$class = new PHP();
$class->addstu(new student('李白'));
$class->addstu(new student('杜甫'));
$class->addstu(new student('白居易'));
echo '<pre>';
var_dump($class);  /*object(PHP)#1 (1) {
                    ["list":"PHP":private]=>
                      array(3) {
                        [0]=>
                        object(student)#2 (1) {
                        ["name":"student":private]=>
                          string(6) "李白"
                        }
                        [1]=>
                        object(student)#3 (1) {
                        ["name":"student":private]=>
                          string(6) "杜甫"
                        }
                        [2]=>
                        object(student)#4 (1) {
                        ["name":"student":private]=>
                          string(9) "白居易"
                        }
                      }
                    }
                    */
//遍历班级  foreach  只能遍历数组 不能遍历对象  只有通过迭代器
foreach ($class as $list){  //class 是对象 不是数组
    echo $list->name;   //这里用到了 __get 方法 取值的时候调用  私有属性 只能用__get()
}































