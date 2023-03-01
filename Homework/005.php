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
$a  = rand(0,2);
$b  = rand(0,2);
$c  = rand(0,2);
$d  = rand(0,2);
$count0 = 0;
$count1 = 0;
$count2 = 0;
match($a) {
    0 => $count0++,
    1 => $count1++,
    2 => $count2++,
};
match($b) {
    0 => $count0++,
    1 => $count1++,
    2 => $count2++,
};
match($c) {
    0 => $count0++,
    1 => $count1++,
    2 => $count2++,
};
match($d) {
    0 => $count0++,
    1 => $count1++,
    2 => $count2++,
};
echo "$a $b $c $d => 0: $count0 1: $count1 2: $count2";
?>
</body> 