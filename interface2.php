<?php

interface User {
    public function getName();
    public function getAge();
}

class Subuser implements User {
    public function getName() {
        return "subuser";
    }

    public function getAge() {
        return 20;
    }
}

$subuser = new Subuser();
echo $subuser->getName();
echo $subuser->getAge();
