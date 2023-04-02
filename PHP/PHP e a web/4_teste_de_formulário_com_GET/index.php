<?php
/* 
- Form test with GET
- We will need to create a form and define the method as GET and also the file or route that we will access in action;
- On the server side, we will access the $_GET variable that contains the parameters sent to the server;
- We will do the processing and return something to the user;
*/


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
    <form action="processing.php" method="GET">
        <div>
            <input type="text" name="name" placeholder="fill in your name: ">
        </div>
        <div>
            <input type="text" name="age" placeholder="fill in your age: ">
        </div>
        <div>
            <input type="submit" value="send">
        </div>
    </form>
</body>
</html>