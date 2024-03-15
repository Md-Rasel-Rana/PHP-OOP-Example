<?php

trait message1 {
    public function foo1() {
        echo "From trait A\n";
    }
}

trait message2 {
    public function foo2() {
        echo "From trait B\n";
    }
}

class Welcome {
    use message1, message2;
}

$obj = new Welcome();
$obj->foo1(); // Output: From trait A
