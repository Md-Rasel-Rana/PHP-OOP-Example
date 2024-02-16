<?php 
class ParentClass {
    public function regularMethod() {
        echo "This is a regular method in the ParentClass.\n";
    }

    final public function finalMethod() {
        echo "This is a final method in the ParentClass.\n";
    }
}

class ChildClass extends ParentClass {
   // Attempting to override the final method will result in a fatal error.
    public function finalMethod() {
        echo "This method cannot be overridden.\n";
    }
}

$obj = new ChildClass();
$obj->regularMethod(); // Output: This is a regular method in the ParentClass.
$obj->finalMethod();   // Output: This is a final method in the ParentClass.
