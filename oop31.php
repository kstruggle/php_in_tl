<?php
//策略模式  方法
interface IStrategy{
    function on_way();
}
class walk implements IStrategy{
    public function on_way()
    {
        echo '走着';
    }
}
class bick implements IStrategy{
    public function on_way()
    {
        echo '骑车去';
    }
}
class bus implements IStrategy{
    public function on_way()
    {
        echo '坐车去';
    }
}
//策略模式 传递不同的参数  调用不同的策略 方法
class strategy{
    public function get_way(IStrategy $obj)   //IStrategy 类型的才行
    {
        $obj->on_way();
    }
}
$obj=new strategy();
$obj->get_way(new walk());