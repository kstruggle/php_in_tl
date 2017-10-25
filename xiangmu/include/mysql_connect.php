<?php
//引入配置文件  绝对路径
print_r($_SERVER['DOCUMENT_ROOT']);
$config = require $_SERVER['DOCUMENT_ROOT'].'/php_hexin/xiangmu/config/config.php';
//print_r($config);


//连接数据库
//@mysql_connect('localhost:3306','root','') or die('数据库连接失败');
$link = @mysql_connect($config['host'].':'.$config['port'],$config['name'],$config['pwd']) or die('数据库连接失败');

//选择数据库
mysql_query('use '.$config['database']) or die('数据库不存在');
//或者
//mysql_select_db($config['database']);


//设置字符集
mysql_query('set names '.$config['charset']);












