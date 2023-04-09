<?php
$host = "localhost";
$database = "user";
$user = "root";
$password = "";

$connection = new PDO("mysql:host=$host;dbname=$database", $user, $password);

// query

$statements = $connection->prepare("INSERT INTO users (name, age, email) VALUES (:name, :age, :email)");

$name = "Pâmela Barbosa";
$age = 24;
$email = "pamela.todateen@gmail.com";

$statements->bindParam(":name", $name );
$statements->bindParam(":age", $age);
$statements->bindParam(":email", $email);

$statements->execute();



?>