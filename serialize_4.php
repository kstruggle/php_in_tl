<?php
/**
 * Created by kyb.
 * Date: 2017/10/24
 * Time: 15:33
 */

//序列化 serialize 对象的序列化

require './serialize_3.php';  //解决类名没有的问题


//反序列化 对象   ./当前目录下  ../ 上一级
$str = file_get_contents('./serialize_2.txt');
$stu = unserialize($str);
var_dump($stu);