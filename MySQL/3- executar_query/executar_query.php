<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'user';

$conn = new mysqli("$host","$user","$password","$database");

// query
$sql = "SELECT * FROM users";

$result = $conn->query($sql);

print_r($result);

$conn->close();

?>