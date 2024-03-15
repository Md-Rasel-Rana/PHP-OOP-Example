<?php

class User {
    public static $name = 'rana';
    public static $age = '28';
    public static $email = "john@example.com";
    public static $password = "password123";

    public static function allUser() {
        echo "Name: " . self::$name . "<br>";
        echo "Age: " . self::$age . "<br>";
        echo "Email: " . self::$email . "<br>";
        echo "Password: " . self::$password . "<br>";
    }

}

User::allUser(); // Call the static method directly
