<?php 
class  Man{
    public function say(){
        echo "i am man ";
    }
 }
 class Man1{
    public function say(){
        echo "i am man1  ";
    }
 }
 class Man2{
    public function say(){
        echo "i am man2  ";

 }
}

$man=new Man();
$man1=new Man1();
$man2=new Man2();
$man->say();
$man1->say();
$man2->say();

