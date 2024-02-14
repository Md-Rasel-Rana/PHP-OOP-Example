<?php
// Define an interface
interface Shape {
    public function calculateArea();
}

// Define classes that implement the interface
class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implement the interface method
    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle implements Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    // Implement the interface method
    public function calculateArea() {
        return $this->length * $this->width;
    }
}

// Create objects of classes implementing the interface
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

// Call the method defined in the interface
echo "Circle Area: " . $circle->calculateArea() . "\n";
echo "Rectangle Area: " . $rectangle->calculateArea() . "\n";
?>
