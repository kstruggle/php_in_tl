<?php


//接口 interface 全是抽象方法
interface Goods{
     public function add();
     public function update();
}
class GoodsA implements Goods{  //implements  实现
    public function add()
    {
        echo '实现add';
    }
    public function update()
    {
        echo '实现update';
    }
}

$goods = new GoodsA();
$goods->add();
$goods->update();