<?php


//方法修饰符  self

class user{
    public static $count = 0;   //静态可以直接访问  class 生成时直接就有空间

    public function __construct()
    {
        self::$count++;
    }

    public function __destruct()
    {
        self::$count--;
    }
    public function showCount(){
        return self::$count;
    }
}

$user1 = new user();
$user2 = new user();
$user3 = new user();
echo '现在有'.$user1->showCount().'人在线<br>';
unset($user1);
echo '现在有'.$user2->showCount().'人在线';
