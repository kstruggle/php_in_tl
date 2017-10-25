<?php


//类常量
class student{
    const type = '学生';   //const 可以在类中使用  defined 不可以 不用加$符号
    public function show()
    {
        echo self::type,"<br>";
        echo student::type;
    }
}

$stu = new student();
$stu->show();

echo '<hr>';

//在接口中定义类常量
interface ipict{
    const type = '巡视';
}
echo ipict::type;
