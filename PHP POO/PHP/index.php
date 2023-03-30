<?php

class Fruit {
    public string $name;
    public string $color;

    public function get_name() {
        return $this->name;
    }

    public function set_name(string $name): void {
        $this->name = $name;
    }

    public function get_color() {
        return $this->color;
    }

    public function set_color(string $color): void {
        $this->color = $color;
    }

}

$apple = new Fruit();

$apple->set_name('Apple');
$apple->set_color('Red');

echo $apple->name;
echo $apple->color;





?>