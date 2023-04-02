<?php

class Human {
    public const olhos =2;
    public const braços = 2;
    public const pernas = 2;

    function showConstants() {
        echo self::braços;
    }
}

$human = new Human();

//object constants
echo $human::olhos;

$human->showConstants();

?>