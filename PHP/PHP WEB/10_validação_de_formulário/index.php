<?php
/* 
- form validation
- Validation is an important part of receiving data;
- We must check if the data sent matches what we are expecting;
- For this we can create conditionals doing the checks;
- If any does not respond or a mandatory field is empty, we return a message to the user;
- Note: it is possible to make validations with HTML and also javascript;

*/
$validation = [];

if(($_POST) > 0) {
    $validation = [];

    if(empty($_POST['name'])) {
        $validation[] = 'Please fill in the username';
    }

    if(empty($_POST['email'])) {
        $validation[] = 'Please fill in the email';
    }

    if($_POST['password'] != $_POST['confirm']) {
        $validation[] = 'passwords must be the same';
    }
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
    <?php if (count($validation)): ?>
        <ul>
            <?php foreach($validation as $validations):  ?>
                <li><?= $validations ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif?>
    <form action="index.php" method="POST" >
        <div>
            <input type="text" name="name" placeholder="Type your name">
        </div>
        <div>
            <input type="text" name="email" placeholder="Type your email">
        </div>
        <div>
            <input type="password" name="password" placeholder="Type your password">
        </div>
        <div>
            <input type="password" name="confirm" placeholder="Confirm your password">
        </div>
        <div>
            <input type="submit" value="Send">
        </div>
    </form>
</body>
</html>