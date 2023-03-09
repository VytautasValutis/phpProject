<?php

if(!isset($_GET['color'])) {
    $color = 'black';
} else {
    $color = '#'.$_GET['color'];
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
<body style="background-color: <?= $color ?>">
    <a href="http://localhost/phpProject/Homework/700/hw703.php">Black</a> 
    <form action="" method="get">
        <input type="text" name="color">
        <button type="submit">COLOR</button>
    </form>

</body>
</html>