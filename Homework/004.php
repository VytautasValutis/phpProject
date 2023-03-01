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
$a  = rand(1,10);
$b  = rand(1,10);
$c  = rand(1,10);
$rez = 'galima';
if ( $a + $b - $c <= 0 ||
    $a + $c - $b <= 0 ||
    $c + $b - $a <= 0
) { $rez = 'negalima'; };
echo "A: $a B: $b C: $c => trikampi sudaryti $rez";
echo '</h1>';

?>
</body> 