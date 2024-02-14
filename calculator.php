<?php
class Calculator {
    public static function add($a, $b) {
        return $a + $b;
    }

    public static function subtract($a, $b) {
        return $a - $b;
    }

    public static function multiply($a, $b) {
        return $a * $b;
    }

    public static function divide($a, $b) {
        if ($b == 0) {
            return "Error: Division by zero";
        } else {
            return $a / $b;
        }
    }
}
?>
