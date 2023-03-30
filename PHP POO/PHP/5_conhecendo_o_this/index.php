<?php
/* 
- The $this refers to the current instance of the object;
- We can thus change a value of an object property with: $this->property = "x"
- Literal translation = this;
- We can invoke an object's method with this as well; */

class Animal {

    public string $namediff;

    public function name($name) {
        //the value of this property namediff will be equal to the parameter name.
        $this->namediff = $name;

        echo "her name is $this->namediff";
    }
}

$frida = new Animal();
$frida->name('frida');


/*
- Create a Car class;
- Create some properties and also the velocity_maximum property;
- Create the method setVelocidadeMaxima, where you can change the maximum speed of the car;
- and also getVelocidadeMaxima where it is possible to print the speed of the car; 
*/

class Car1 {
    public string $color;
    public string $year;
    public string $brand;
    public string $maximum_speed;

    public function setMaximumSpeed(string $maximum_speed): void {
        $this->maximum_speed = $maximum_speed;
        
    }

    public function getMaximumSpeed() {
        echo "A velocidade máxima da BMW é de $this->maximum_speed km/h";
    }
}

$bmw = new Car1();
$bmw->color = ('white');
$bmw->year = ('2023');
$bmw->brand = ('BMW');
$bmw->setMaximumSpeed('280');
$bmw->getMaximumSpeed();

?>