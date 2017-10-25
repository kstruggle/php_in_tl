<?php


//方法修饰符  self

class person{
    public function show()
    {

    }
}

class Studnet extends person{
    public function display()
    {
        $this->show();
        parent::show();
    }
}