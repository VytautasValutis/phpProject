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
foreach(range(1, 5) as $_) : ?>
    <div>
        <?php 
        $kalimas = 0;
        $count = 0;
        do {
            $kalimas += rand(5, 20);
            $count++;
        } while($kalimas < 85); ?>
        <p>Reikejo <?= $count ?> smugiu </p>
    </div>
<?php endforeach ?>
<p> ------------------- </p>
<?php foreach(range(1, 5) as $_) : ?>
    <div>
        <?php 
        $kalimas = 0;
        $count = 0;
        do {
            if(rand(0, 1) !== 0) {
                $kalimas += rand(20, 30);
            };
            $count++;
        } while($kalimas < 85); ?>
        <p>Reikejo <?= $count ?> smugiu </p>
    </div>
<?php endforeach ?>

</body> 