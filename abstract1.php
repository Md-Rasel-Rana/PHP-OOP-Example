<?php
// Abstract class: Vehicle
abstract class Vehicle {
    protected $brand;
    protected $model;
    protected $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    // Abstract method: start()
    abstract public function start();

    // Concrete method: getDescription()
    public function getDescription() {
        return "This is a " . $this->year . " " . $this->brand . " " . $this->model;
    }
}

// Concrete class: Car
class Car extends Vehicle {
    public function start() {
        return "Starting the car engine...";
    }
}

// Concrete class: Motorcycle
class Motorcycle extends Vehicle {
    public function start() {
        return "Starting the motorcycle engine...";
    }
}

// Usage
$car = new Car("Toyota", "Camry", 2020);
echo $car->getDescription() . "\n"; // Output: This is a 2020 Toyota Camry
echo $car->start() . "\n"; // Output: Starting the car engine...

$motorcycle = new Motorcycle("Honda", "CBR", 2019);
echo $motorcycle->getDescription() . "\n"; // Output: This is a 2019 Honda CBR
echo $motorcycle->start() . "\n"; // Output: Starting the motorcycle engine...
