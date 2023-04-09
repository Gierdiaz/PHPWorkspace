<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'user';

$conn = new mysqli("$host","$user","$password","$database");

// query

$id = 1;

$statements = $conn->prepare("UPDATE users SET name = ? WHERE id = ?");

$name = "Julien Tacy";

$statements->bind_param("si", $name, $id);

$statements->execute();

if($statements->error) {
    echo 'Error: ' . $statements->error;
}else {
    echo 'success';
}

$conn->close();

?>