<?php
/* - http is a stateless protocol;
- That is, after the end of the request, the connection between user and server is terminated, the next connection no longer has a relationship between both;
- In order to keep this data, we can use cookies;
- The problem with this approach is that some browsers do not allow the use of cookies or block them;

-- cookies

- Cookies are strings that contain information;
- The function for adding a cookie is setcookie;
- The function must be called before the body of the page, as it sends data as header(header);
- The cookie takes data such as: name, value and expiration date;
- We can access cookies back with $_COOKIE; */

setcookie('name', 'allison', time() + 3600);

if(isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
}

print_r($_COOKIE);
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
    <h1>Hello World</h1>
    <?php if (!empty($name)): ?>
        <p>welcome <?= $name ?></p>
    <?php endif; ?>
</body>
</html>