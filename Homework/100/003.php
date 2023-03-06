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

echo '<h1 class="rezstyle">';
$kintamasis1  = rand(0,25);
$kintamasis2  = rand(0,25);
$kintamasis3  = rand(0,25);
$minSk = min($kintamasis1, $kintamasis2, $kintamasis3);
$maxSk = max($kintamasis1, $kintamasis2, $kintamasis3);
$rez = $kintamasis1 + $kintamasis2 + $kintamasis3 - $minSk - $maxSk;
echo "k1 $kintamasis1 k2 $kintamasis2 k3 $kintamasis3 rez $rez";
echo '</h1>';

?>
</body> 