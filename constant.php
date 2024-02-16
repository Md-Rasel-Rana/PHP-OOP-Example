<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();

class Math {
    const PI = 3.14159;
    const E = 2.71828;

    public static function getArea($radius) {
        return self::PI * $radius * $radius;
    }

    public static function getExponential($x) {
        return self::E ** $x;
    }
}

echo Math::PI; // Outputs: 3.14159
echo Math::E;  // Outputs: 2.71828

echo Math::getArea(2);         // Outputs: 12.56636
echo Math::getExponential(2);  // Outputs: 7.389056

?>