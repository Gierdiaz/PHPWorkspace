<?php
//Below we declare a class named Fruit consisting of two properties ($name and $color)
//and four methods set_name(), get_name() and set_color and get_color for setting and getting the $name and $color property:
class Fruit {
    public string $name;
    public string $color;

    //construct
    public function __construct(string $name, string $color){
        $this->name = $name;
        $this->color = $color;
    }

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

//with the constructor method it is necessary to place parameters inside the object call
$apple = new Fruit("Apple", "Red");

/* $apple->set_name('Apple');
$apple->set_color('Red');
 */
echo $apple->name;
echo $apple->color;





?>