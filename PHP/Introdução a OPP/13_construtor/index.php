<?php
/* 
- Through the constructor we can initialize objects with unique property values ​​for each object;
- We pass the property values ​​as arguments;
- ex: function __construct($doors, $engine, $sunroof) {} 
*/ 

class House {
    public string $door;
    public string $window;
    public string $garden;

    public function __construct(string $door, string $window, string $garden ){
        $this->door = $door;
        $this->window = $window;
        $this->garden = $garden;
    }
}

$house = new House("two doors","four windows","one golden garden:");
echo "The house has $house->door, $house->window and $house->garden";

$house2 = new House(" one door","three windows","two golden garden");
echo "The house has $house2->door, $house2->window and $house2->garden";

/* 
- Create a Dog class with properties;
- Initialize properties via constructor;
- Create a method to display each of the properties you created; 
*/

class Dog {
    public string $name;
    public string $bark;
    public string $howl;
    public string $dig;

    public function __construct(string $name, string $bark, string  $howl,  string $dig)
    {
        $this->name = $name;
        $this->bark = $bark;
        $this->howl = $howl;
        $this->dig = $dig;
    }

    public function showName() {
        echo " I have a dog. His name is $this->name. He bark $this->bark, howl $this->howl and dig $this->dig the whole garden.";
    }
}

$dog = new Dog('Yumi', 'woof woof', 'Auuuuu', 'cava cava');

$dog->showName();
?>