<?php

class Gatinho {

}

class Gatinha {

}

class Matematico extends Gatinho {

}

$josue = new Matematico();

$jose = new Gatinho();

$gudi = new Gatinha();

if ($jose instanceof Gatinho) {
    echo 'jose é um Gatinho ';
}else {
    echo ' Não é um gatinho';
}

if ($gudi instanceof Gatinha) {
    echo 'gudi é uma Gatinha ';
}else {
    echo ' Não é uma gatinha';
}

if ($josue instanceof Matematico) {
    echo 'josue é um Matematico ';
}else {
    echo ' josue não é um Matematico';
}

if ($josue instanceof Gatinho) {
    echo ' josue é um Gatinho';
}else {
    echo ' josue não é um Gatinho';
}
?>