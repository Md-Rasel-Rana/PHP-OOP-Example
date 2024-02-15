<?php
class Car {
    private $model;
    private $color;

    public function __construct($model, $color) {
        $this->model = $model;
        $this->color = $color;
    }

    public function getModel() {
        return $this->model;
    }

    public function getColor() {
        return $this->color;
    }
}

$car = new Car("Toyota", "blue");
    
echo "Model: " . $car->getModel() . "\n";
echo "Color: " . $car->getColor() . "\n";
