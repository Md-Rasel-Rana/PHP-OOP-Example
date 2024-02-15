<?php

// Define the Shape interface
interface Shape {
    public function calculateArea();
    public function calculatePerimeter();
}


// Implement the Circle class
class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter() {
        return 2 * pi() * $this->radius;
    }
}

// Implement the Rectangle class
class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }

    public function calculatePerimeter() {
        return 2 * ($this->width + $this->height);
    }
}

// Implement the Triangle class
class Triangle implements Shape {
    private $side1;
    private $side2;
    private $side3;

    public function __construct($side1, $side2, $side3) {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function calculateArea() {
        // Heron's formula for calculating the area of a triangle
        $s = ($this->side1 + $this->side2 + $this->side3) / 2;
        return sqrt($s * ($s - $this->side1) * ($s - $this->side2) * ($s - $this->side3));
    }

    public function calculatePerimeter() {
        return $this->side1 + $this->side2 + $this->side3;
    }
}

// Usage
$circle = new Circle(5);
echo "Circle Area: " . $circle->calculateArea() . "\n";
echo "Circle Perimeter: " . $circle->calculatePerimeter() . "\n";

$rectangle = new Rectangle(4, 6);
echo "Rectangle Area: " . $rectangle->calculateArea() . "\n";
echo "Rectangle Perimeter: " . $rectangle->calculatePerimeter() . "\n";

$triangle = new Triangle(3, 4, 5);
echo "Triangle Area: " . $triangle->calculateArea() . "\n";
echo "Triangle Perimeter: " . $triangle->calculatePerimeter() . "\n";
