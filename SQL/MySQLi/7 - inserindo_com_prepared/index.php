<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'user';

$conn = new mysqli("$host","$user","$password","$database");

// query

//dados
$name = "Cristano Alberto";
$age = 28;
$email = "cristanoalberto@hotmail.ty";

//inserção
$statements = $conn->prepare("INSERT INTO users (name, age, email) VALUES (?,?,?)");

$statements->bind_param("sis", $name, $age, $email); //s = string, i = integer, d = double

$statements->execute();

?>