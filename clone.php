<?php
class MyClass {
    public $property;

    public function __construct($value) {
        $this->property = $value;
    }
}

$obj = new MyClass('hello rasel rana');
echo $obj->property; // Output: hello
$cloneobj=clone $obj;
echo $cloneobj->property="hello kamal here are you ";

?>