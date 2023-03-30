<?php
/* 
- public: The property or method can be accessed in any way;
- protected: The property or method can only be accessed by the origin class or those that receive the same inheritance;
- private: The property or method can only be accessed by the class that created it;
 */
class Car2 {
    public int      $wheels = 10;
    public string   $window = "without film";
}

class Mechanic {
    public function  changeRoutes($obj) {
        $obj->wheels = 11;
    }

    public function putFilm($obj, $film) {
        $obj->window = $film;
    }
}

$car = new Car2();
echo $car->wheels;

$mechanic = new Mechanic();
$mechanic->changeRoutes($car);
echo $car->wheels;

$mechanic->putFilm($car, "G20");
echo $car->window;
?>