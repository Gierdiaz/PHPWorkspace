<?php

$HOST = "localhost";
$USER =  "root";
$PASSWORD = "";
$DATABASE = "userr";

$conexion = new mysqli("$HOST", "$USER", "$PASSWORD", "$DATABASE");

if($conexion->connect_errno) {
    echo "Erro: " . mysqli_connect_error();
    echo "Erro: " . $connexion->connect_error;
}

?>