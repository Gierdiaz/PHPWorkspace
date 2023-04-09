<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'user';

$conn = new mysqli("$host","$user","$password","$database");

$id = 4;

$statements = $conn->prepare("SELECT * FROM users WHERE id = ?");

$statements->bind_param("i", $id); //i = integer

$statements->execute();

$result = $statements->get_result();

$data = $result->fetch_assoc();

print_r($data);

?>