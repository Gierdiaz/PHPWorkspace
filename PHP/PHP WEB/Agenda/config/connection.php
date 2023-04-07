<?php
$host   = 'localhost';
$dbname = 'agenda';
$user   = 'root';
$pass   = '';

try {

    $coon = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    //ativar o modo de erro
    $coon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $err) {
    //erro na conexão
    $error = $err->getMessage();
    echo "Erro: $err";
}
?>