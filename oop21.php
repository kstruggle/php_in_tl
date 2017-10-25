<?php

abstract class Goods{
    protected $name;
    public function setName($name)
    {
        $this->name = $name;
    }
    abstract public function getName();  //抽象方法
}
class Books extends Goods{
    public function getName()
    {
        echo "《{$this->name}》";
    }
}

$book = new Books();
$book->setName('php测试');
$book->getName();