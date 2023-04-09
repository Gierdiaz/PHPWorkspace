<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'user';

$conn = new mysqli("$host","$user","$password","$database");

// query

$id = 6;

$statements = $conn->prepare("SELECT * FROM users WHERE id = ?");

$statements->bind_param("i", $id); //i = integer

$statements->execute();

$result = $statements->get_result();

$data = $result->Fetch_row();

print_r($data);

$conn->close();

?>