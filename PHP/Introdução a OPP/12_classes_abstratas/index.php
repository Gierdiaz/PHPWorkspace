<?php
/* 
- Abstract classes cannot be instantiated;
- They may have abstract methods that must be implemented if a class inherits the abstract one;
- The word reserved for both classes and methods is abstract;
- ex: abstract class AbstractClass {}
 */

abstract class Test {

    public static function testingClass() {
        echo 'this methods is from an abstract class:';
    }

    abstract public function testABS();
}

Test::testingClass();

class Nova extends Test {

    public function testABS() {
        echo ' testing method abstract';
    }
}

$new = new Nova();
$new->testABS();

?>