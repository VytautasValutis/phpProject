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

<?php for ($i=0; $i < 300; $i++) : ?>
    <?php $k = rand(0,300); ?>
        <?php if($k > 275) {$col = 'red';} else {$col = 'black';} ?> 
        <span style="color: <?= $col ?>;"><?= $k ?></span>
<?php endfor ?>


</body> 