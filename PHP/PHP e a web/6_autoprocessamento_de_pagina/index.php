<?php
/*
 - Page self-processing
- We can create a page that does data processing and also displays input information;
- For that we must create an if that checks if the request method ($_SERVE['REQUEST_METHOD']) is GET or POST;
- Then create the two variations for each of the possibilities;
- Or check if any parameters came from the request and then create the variations;
 */

$method =  $_SERVER['REQUEST_METHOD'];

if(isset($_POST['name'])) {
    $name = $_POST['name'];
}
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
    <?php
        if($method == 'GET'):       
    ?>
        <form action="index.php" method="POST">
            <div>
                <input type="text" name="name" placeholder="type your name">
            </div>
            <div>
                <input type="submit" value="send">
            </div>
        </form>
    <?php
        else:
    ?>
        <h1>Your name is <?= $name?></h1>
    <?php
        endif;
    ?>
</body>
</html>

