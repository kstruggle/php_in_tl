<?php

//$this  当前对象 谁调用就是谁

class Goods{
    public function __construct()
    {
        var_dump($this);
    }
}
class Book extends Goods{

}

new Goods();  //object(Goods)#1 (0) { }
echo '<hr>';
new Book();    //object(Book)#1 (0) { }

