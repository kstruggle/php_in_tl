<?php
/**
 * Created by kyb.
 * Date: 2017/10/24
 * Time: 15:33
 */

//序列化 serialize 对象的序列化

//class student {
//    private $name;
//    private $sex;
//    private $age;
//
//    public function __construct($name,$sex,$age)
//    {
//        $this->name = $name;
//        $this->sex = $sex;
//        $this->age = $age;
//    }
//}

require './serialize_3.php';

$stu = new student('李白','男','18');
$str1 = serialize($stu);  //序列化对象
file_put_contents('./serialize_2.txt', $str1);
echo $str1;