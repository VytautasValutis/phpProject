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
foreach(range(1, 10) as $v) : ?>
    <div>
        <?php foreach(range(1, 21) as $h) : ?>
            <?php if($h < 12 - $v || $h > 10 + $v) : ?>
                <span style="color: white; padding: 0 10px;">*</span>
                <?php else : ?>   
                    <span style="color: rgb(<?= rand(0, 255)?>,<?= rand(0, 255)?>,<?= rand(0, 255)?>);
                padding: 0 10px">*</span>
            <?php endif ?>
            <?php endforeach ?>
    </div>
<?php endforeach ?>
<div>
<?php foreach(range(1, 21) as $h) : ?>
    <span style="color: rgb(<?= rand(0, 255)?>,<?= rand(0, 255)?>,<?= rand(0, 255)?>);
    padding: 0 10px">*</span>
<?php endforeach ?>
</div>
<?php
foreach(range(1, 10) as $v) : ?>
    <div>
        <?php foreach(range(1, 21) as $h) : ?>
            <?php if($h < $v + 1 || $h > 21 - $v) : ?>
                <span style="color: white; padding: 0 10px;">*</span>
                <?php else : ?>   
                    <span style="color: rgb(<?= rand(0, 255)?>,<?= rand(0, 255)?>,<?= rand(0, 255)?>);
                padding: 0 10px">*</span>
            <?php endif ?>
            <?php endforeach ?>
    </div>
<?php endforeach ?>

</body> 