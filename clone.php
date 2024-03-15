<?php

class User {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function myinfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
    }

    public function userinfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
    }
}

$user1 = new User("Yousuf Rahman", 30);
$user2 = new User("Kamruzzaman", 25);

$user1->myinfo(); // Output information about user1

// Clone user1 (creating a new object)
$cloneobj = clone $user2;

// Output information about the cloned object (user1)
$cloneobj->userinfo();
