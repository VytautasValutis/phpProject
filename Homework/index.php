<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body>
<?php
// echo '<pre>';
do {
    $a = rand(0, 1000);
    $b = rand(0, 1000);
    } while ($a == $b);
    $long = rand(10,30);
    $sk1 = $sk2 = 0;
    echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
    $c = [];
    for ($i=0; $i<$long; $i++) {
    $c[] = array_rand(array_flip([$a, $b]));
    }
    echo '<h4>Masyvas:</h4>';
    echo '<pre>';
    print_r($c);
    echo '</pre>';
    ?>
</body> 

