<?php
/*
- Interfaces create a template for defining a class;
- So every class implements an interface, it must also implement its properties and methods obligatorily;
- The reserved word is implments;
- ex: class Human implements Characteristics 
*/

interface Characteristics {

    public function walk();

    const name = "Pedro";
}

class Human implements Characteristics {
    public string $age = '8';

    public function walk() {
        echo 'i am walking';
    }

    public function sayName() {
        //Remembering that to concatenate a constant we must use the self
        echo ' My name is '.self::name;
    }
}

$a_human = new Human();
$a_human->walk();
$a_human->sayName();

?>