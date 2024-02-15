<?php
// Define a superclass Animal
class Animal {
    public function makeSound() {
        return "Animal makes a sound";
    }
}

// Define subclasses Dog and Cat that inherit from Animal
class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

// Create instances of Dog and Cat
$dog = new Dog();
$cat = new Cat();

// Call the makeSound() method on both objects
echo $dog->makeSound(); // Output: Woof!
echo $cat->makeSound(); // Output: Meow!
