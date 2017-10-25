<?php
/**
 * Created by kyb.
 * Date: 2017/10/24
 * Time: 15:33
 */

//序列化 serialize
$arr = array('name'=>'李白','sex'=>'男','age'=>'15');
$new = serialize($arr);   //序列化
print_r($new);echo '<br>';
print_r(unserialize($new)); //反序列化

echo '<hr>';

//$str = 10;
//file_put_contents("d:/txt.txt", $str);   //创建了一个文本 并写入内容放在 d盘
//echo file_get_contents(e:/serialize.txt);  //读取文件内容

//数组写入文件的时候只能保存的是内容  成了字符串  所以要用到序列化

$arr2 = array('你大爷','尼玛','你把');
$new2 = serialize($arr2);
file_put_contents('E:\xampp\htdocs\phpintl\php_hexin\serialize.txt', $new2);
echo '<hr>';
$arr3 = file_get_contents('E:\xampp\htdocs\phpintl\php_hexin\serialize.txt');
print_r(unserialize($arr3));
