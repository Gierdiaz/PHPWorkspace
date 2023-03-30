<?php
//declaring properties
class PHP {
    //properties
    public string $dynamics;
    public string $weak;
    public string $gradual;

    //methods
    public function programming() {
        echo 'php: programming language';
    }
}

//instance
$php = new PHP;
$php->programming();


/* - Create a Person class
- Create the name and age property;
- and also a walk method */
class People {
    public string $name;
    public string $age;

    public function walk(string $walk) {
        echo "I already walked $walk km in the parkk.";
    }

}

$people = new People;
$people->walk(4);
$people->name = ("Hagolag");
$people->age = ("85");

echo "My name is $people->name, i am  $people->age old and i am walking in the park.";

?>