<?php

//析构函数 模拟垃圾回收
class DbClass{
    private $link;   //连接对象

    //创建连接对象
    public function __construct()
    {
       $this->link = mysql_connect('localhost:3306','root','');
    }

    //销毁  连接对象
    public function __destruct ()
    {
        mysql_close($this->link);
    }
}

$db = new DbClass();
var_dump($db);

echo '<hr>';


unset($db);   //执行销毁函数  link 就销毁了

echo '<hr>';
var_dump($db);

