<?php

class Fruit {

    public string $name;
    public string $color;

    public function __construct(string $name, string $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function __destruct() {
        echo "The fruit is {$this->name} and your color is {$this->color}";
    }
}

$apple = new Fruit("Apple", "Red");


?>