<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'user';

$conn = new mysqli("$host","$user","$password","$database");

//query

//$sql = "CREATE TABLE teste (first_name VARCHAR(50), last_name VARCHAR(50))";

$sql = "DROP TABLE teste";

$result = $conn->query($sql);

print_r($result);

$conn->close();
?>