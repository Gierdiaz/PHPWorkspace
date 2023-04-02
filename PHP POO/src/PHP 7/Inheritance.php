<?php

class Fruit {
    public string $name;
    public string $color;

    public function __construct(string $name, string $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function into() {
        echo "this fruit is {$this->name} and your color is {$this->color}.";
    }
}

class Strawberry  extends Fruit {
    public function message() {
        echo "Am I a fruit or a berry? ";
    }
}

$strawberry = new Strawberry("Strawberry", "red");

$strawberry->message();
$strawberry->into();

?>