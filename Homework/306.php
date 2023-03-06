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
$c = 0;
do {
    if( rand(0, 1) === 0 ) {
        $m = 'H';
        $c++;
    } else {
        $m = 'S';
        $c = 0;
    }; ?> 
    <p><?= $m ?></p>

<?php } while($c < 3) ?>


</body> 