<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'user';

$conn = new mysqli("$host","$user","$password","$database");

// query 

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

//mostrar todos os resultados fetch_All()
$users = $result->fetch_all();

//mostra um resultado fetch_assoc();
$users = $result->fetch_assoc();



print_r($users);

$conn->close();

?>