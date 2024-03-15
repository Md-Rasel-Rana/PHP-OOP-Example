<?php 
class parentClass {
    public $name = 'rasel rana';
    public function mydata($a,$b){
        return $a+$b;
    }

}
class derivedClass extends parentClass {
    public function mydata($a,$b){
        return $a*$b;
    }
}

$obj = new derivedClass();
echo $obj->mydata(10,20);
echo $obj->name;