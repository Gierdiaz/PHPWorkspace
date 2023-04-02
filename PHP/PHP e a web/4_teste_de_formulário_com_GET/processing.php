<?php

if(isset($_GET['name'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];
}else {
    $name = 'standard';
    $age = 'standard';
}

?>

<h1>O seu nome é <?= $name?> e sua idade é <?= $age ?> anos</h1>
