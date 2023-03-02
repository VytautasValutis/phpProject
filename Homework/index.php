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
$val = rand(0, 23);
$min = rand(0, 59);
$sek = rand(0, 59);
echo "$val val $min min $sek sek <br>";
$plius = rand(0, 300);
echo "$plius plius sek <br>";
$visoSek = $val * 3600 + $min * 60 + $sek + $plius;
$val = floor($visoSek / 3600);
$min = floor(($visoSek - ($val * 3600)) / 60);
$sek = floor($visoSek - $val * 3600 - $min * 60);
echo "$val val $min min $sek sek <br>";


?>
</body> 