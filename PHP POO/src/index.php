<?php
include "Pessoa.php";

// OBJETO;
$pessoa = new Pessoa("Fernando Henrique", 47);

// INSTÂNCIAR MÉTODO;
//$pessoa->Falar();

// SETAR VALOR PARA ATRIBUTO;
/* $pessoa->nome = ('Arthur Salles');
$pessoa->idade = (36); */


// ESCREVER CONTEÚDO DE UM ATRIBUTO;
/* echo "<p>Nome: $pessoa->nome </p>";
echo "<p>Idade: $pessoa->idade </p>";
echo "<hr>"; */

// USAR MÉTODOS ACESSORES;
$pessoa->setName('Mateus Camargo');
$pessoa->setIdade(25);

echo "<pre>";
var_dump($pessoa);
echo "</pre>";

?>