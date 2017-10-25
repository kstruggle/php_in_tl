<?php


//方法修饰符  final
 final class teacher{

}
//class chainese_teacher extends teacher{ //class chainese_teacher may not inherit from final class (teacher)
//    public function show (){
//        echo 'final 修饰的类不能被继承';
//    }
//}


class A {
    final public function show()
    {
        echo 'final 修饰的方法不能被继承';
    }
}
class B extends A {
    public function show()  //无法覆盖最终方法A :: show（）
    {
        
    }
}

