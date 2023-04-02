<?php
/* 
- We can fill in the form with data that came from the request;
- This happens a lot in search results or record edits;
- We can check if the data was sent and received for the page and use
- the echo to display in the value attribute of the input;
- ex: <input type="text" value="<?php echo $name; ?>">
 */

$user = [ 
    'name'       => 'josh',
    'age'        => '35',
    'city'       => 'New York',
    'email'      => 'josh@exemple.org',
    'profession' => 'programmer'
  
];

if($user) {
    $name       = $user['josh'];
    $age        = $user['35'];
    $city       = $user['New York'];
    $email      = $user['josh@exemple.org'];
    $profession = $user['programmer'];
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
    <form action="">
        <div>
            <input type="text" name="name" placeholder="Type your name" value="<?= $name ?>">
        </div>
        <div>
            <input type="text" name="age" placeholder="Type your age" value="<?= $age ?>">
        </div>
        <div>
            <input type="text" name="city" placeholder="Type your city" value="<?= $city ?>">
        </div>
        <div>
            <input type="text" name="email" placeholder="Type your email" value="<?= $email ?>">
        </div>
        <div>
            <input type="text" name="profession" placeholder="Type your profession" value="<?= $profession ?>">
        </div>
        <div>
            <input type="submit" value="send">
        </div>
    </form>
</body>
</html>