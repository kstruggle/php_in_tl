<?php
/**
 * Created by kyb.
 * Date: 2017/10/24
 * Time: 15:33
 */

//序列化 serialize 对象的序列化

class student {
    private $name;
    private $sex;
    private $age;

    public function __construct($name,$sex,$age)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
    }
}
