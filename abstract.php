<?php
abstract class Shape {
    // Abstract method with protected access modifier
    abstract protected function calculateArea($x, $y);  
}

class Rectangle extends Shape {
    // Implementation of abstract method with the same access modifier
   public function calculateArea($length, $width) {
        return $length * $width;
    }
}

class Circle extends Shape {
    // Implementation of abstract method with less restricted access modifier
    public function calculateArea($radius, $dummy) {
        return pi() * $radius * $radius;
    }
}

// Create objects of subclass
$rectangle = new Rectangle();
$circle = new Circle();

// Call method calculateArea()
echo $rectangle->calculateArea(5, 4) . "\n"; // Output: 20 (Length * Width)
echo $circle->calculateArea(3, 0) . "\n";     // Output: 28.274333882308 (π * r^2)
?>
