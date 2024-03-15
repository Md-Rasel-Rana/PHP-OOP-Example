<?php 
class A {
    public $name;
    public function name(){
        echo "A";
    }
}

class B extends A {
    public function name(){
        echo "B";
    }
}
$b = new A();
$b->name(); // 输出 "B"
$b->name(); // 输出 "A