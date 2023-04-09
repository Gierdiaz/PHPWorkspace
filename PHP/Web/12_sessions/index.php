<?php
/* 
About the sessions

- With session we can create variable that persists in different pages and also persists
for multiple visits to the same website;
- The session uses cookie resources for its functioning, and if the resource is
disabled propagates session via URL;
- Sessions are used for: authentication, shopping cart and everything that needs to persist
the page by page;
- It ends up being the most used resource, compared to the cookie;

Where are sessions saved?

- The sessions are saved in files on the computer where we are or on the application server;
- The path where the files are saved is in php.ini in the
session.save.path setting;
- Sessions can be saved in two formats: PHP's own and also the web Distributed Data eXchange (WDDX);
*/

session_start();

$_SESSION['name'] = 'allison';

//print_r($_SESSION);
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
    <h1>Hi, Session</h1>
</body>
</html>