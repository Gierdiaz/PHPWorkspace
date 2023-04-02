<?php
/* 
- Anonymous classes are created in a variable and have no name;
- They work like any other class;
- We need to close it with ";"
- ex: $anonymous = new class() {};
 */

$class = new class() { 

    public string $name = "Jorge";

    public function sayName(){ 
        echo "Hi! My name is $this->name!";
    }
};

$class->sayName();




?>