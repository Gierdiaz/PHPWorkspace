<?php

/* 
- Parameter with more than one value
- To receive all the elements in the backend we need to add an array syntax in the name;
- This way we will receive all marked inputs;
- ex: name="characteristics[]"
*/
if(isset($_POST['Ingredients'])) {
    $Ingredients = $_POST['Ingredients'];

    print_r($Ingredients);
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
    <form action="index.php" method="POST">
        <div>
            <input type="checkbox" name="Ingredients[]" value="tomato"> tomato
        </div>
        <div>
            <input type="checkbox" name="Ingredients[]" value="onion"> onion
        </div>
        <div>
            <input type="checkbox" name="Ingredients[]" value="pepper"> pepper
        </div>
        <div>
            <input type="submit" value="Send">
        </div>
    </form>
</body>
</html>