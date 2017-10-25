<?php

//子类给父类的构造函数传递参数

class Person {
    protected $name;
    protected $sex;
    public function __construct($name,$sex)
    {
        $this->name = $name;
        $this->sex = $sex;
    }
}

class Student extends Person{
    private $score;
    public function __construct($name,$sex,$score)
    {
        parent::__construct($name,$sex);   //调用父类的构造函数  并传递参数
        $this->score = $score;
    }

    public function show()
    {
        echo $this->score;
        echo $this->name;
        echo $this->sex;

    }
}

$stu = new Student('tom','male','88');
$stu->show();
