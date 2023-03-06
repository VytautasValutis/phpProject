<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW</title>
    <style>
        span {
            padding: 0 3px;
        }
    </style>    
    <!-- <link rel="stylesheet" href="./main.css"> -->
</head>
<body>

<?php
foreach(range(1, 10) as $v) : ?>
    <div>
        <?php foreach(range(1, 10) as $h) : ?>
            <?php if($v === $h) : ?>
                <span style="color: red">0</span>
            <?php else : ?>   
                <span style="color: rgb(<?= rand(0, 255)?>,<?= rand(0, 255)?>,<?= rand(0, 255)?>);">*</span>
            <?php endif ?>
        <?php endforeach ?>
    </div>
<?php endforeach ?>

</body> 