<?php
/* 
- Form test with PASSWORD_BCRYPTWe'll need to create a form and set the method to POST
and also the file or route that we are going to access in action;
- On the server side, we'll access the $_POST variable that contains the parameters sent to the server;
- We'll do the processing and return something to the user; */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastro.php" method="POST">
        <div>
            <input type="text" name="marca" placeholder="marca do carro">
        </div>
        <div>
            <input type="text" name="preço" placeholder="preço do carro">
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="teto solar"> teto solar
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="película"> película
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="blindado"> blindado
        </div>
        <div>
            <input type="submit" value="enviar">
        </div>
    </form>
</body>
</html>