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
    <a href="http://localhost/phpProject/Homework/700/hw702.php">Black</a> 
    <a href="http://localhost/phpProject/Homework/700/hw702.php?color=001234">Red</a> 

</body>
</html>