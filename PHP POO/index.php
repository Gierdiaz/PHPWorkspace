<?php

require_once 'C:\Users\Allison\Desktop\POO PHP\scr\Funcionario.php';
require_once 'scr/Cliente.php';
require_once 'scr/Pessoa.php';

$funcionario1 = new Funcionario("Machado", 26,  33333333, "desenvolvedor", 30000);

var_dump($funcionario1);

echo $funcionario1->__toString();

?>