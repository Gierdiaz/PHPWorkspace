<?php
//with methods we determine the behavior of our class. If he's a dog then he can bark.

class Greenery {
    //declaring a method
    public function lettuce() {
        echo 'Am i an greenery?';
    }
}

$greenery = new Greenery;
$greenery->lettuce();

//class
class Dog {
    //method
    public function bark() {
        echo 'woof woof!';
    }
}

//instance
$dog = new Dog();
$dog->bark();

?>