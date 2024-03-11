<?php 
class Animal {
    public function makesound(){
        echo "Animal makes a sound";
    }
}
class Dog extends Animal {
    public function makesound(){
        echo "Dog says: Bow Wow";
}
}
class Cat extends Animal {
    public function makesound(){
        echo "Cat says: Meow";
}
}
$animal = new Dog();
$cat = new Cat();
$animal->makesound();
$cat->makesound();