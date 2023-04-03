<?php
/* 
- To send files to the server we will need to change the form's enctype to: multipart/form-data;
- You will also need a file type unput;
- The file size can exhaust server memory;
- After sending all image data will be in $_FILES; 
*/
if(isset($_FILES)) {
    print_r($_FILES);
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
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <div>
            <input type="file" name="name">
        </div>
        <div>
            <input type="submit" value="Send">
        </div>
    </form>
</body>
</html>