<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'user';

$conn = new mysqli("$host","$user","$password","$database");

// query

$sql = "INSERT INTO users (name, age, email) VALUES ('Sr. Luiz', 64 , 'luizvigeria@example.com')";

$result = $conn->query($sql);

print_r($result);

$conn->close();
?>