<?php

class Car {
    // Private properties can only be accessed within this class
    private $model;
    private $color;

    // Public methods can be accessed from outside the class
    public function __construct($model, $color) {
        $this->model = $model;
        $this->color = $color;
    }

    // Public methods to get and set private properties
    public function getModel() {
        return $this->model;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }
}

// Create an object of the Car class
$car = new Car('Toyota', 'Red');

// Accessing public methods to retrieve and modify private properties
echo "Model: " . $car->getModel() . "\n"; // Output: Model: Toyota
echo "Color: " . $car->getColor() . "\n"; // Output: Color: Red

// Modify the color using a public method
$car->setColor('Blue');
echo "New Color: " . $car->getColor()."\n"; // Output: New Color: Blue

// Attempt to access private properties directly (will result in an error)
// echo $car->model; // This will produce an error because $model is private

?>
