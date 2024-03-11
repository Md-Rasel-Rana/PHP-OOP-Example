<?php 
 abstract class abstractClass{
    public $name;
    public $age;
    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
   abstract public function savedata();
}
class childClass extends abstractClass{
    public function savedata(){
        echo "Name is ".$this->name." and age is ".$this->age;
    }
}

$myobj=new childClass("Raj",25);
$myobj->savedata();