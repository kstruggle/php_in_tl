<?php


//参数约束  类是一个数据类型
class student{

}

//调用函数show只能传入 student类型的对象  否则报错
function show (student $obj){
    var_dump($obj);
}

show(new student());