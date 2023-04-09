<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'user';

$conn = new mysqli("$host","$user","$password","$database");

// query

$id = 12;

$statements = $conn->prepare("DELETE FROM users WHERE id = ? ");

$statements->bind_param("i", $id); // i = integer

$statements->execute();

$conn->close();

?>