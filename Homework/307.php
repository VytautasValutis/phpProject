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
$sumK = 0;
$sumP = 0;
do {
    $pointP = rand(10, 20);
    $pointK = rand(5, 25);
    if( $pointK > $pointP ) : ?>
        <p>Kazys :<?= $pointK ?> Petras : <?=$pointP ?> Partija laimejo Kazys</p>
    <?php elseif( $pointK < $pointP ) : ?>
        <p>Kazys :<?= $pointK ?> Petras : <?=$pointP ?> Partija laimejo Petras</p>
    <?php else : ?>    
        <p>Kazys :<?= $pointK ?> Petras : <?=$pointP ?> Lygiosios</p>
        <?php endif ?> 
        <?php
    $sumP += $pointP;
    $sumK += $pointK;
    
} while($sumP < 222 && $sumK < 222) ?>
    <p>Kazys :<?= $sumK ?> Petras : <?=$sumP ?></p>


</body> 