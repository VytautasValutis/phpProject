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

// echo '<h1 class="rezstyle">';
$sk1  = rand(0,100);
$sk2  = rand(0,100);
$sk3  = rand(0,100);
$count = 0;
$sum = 0;
if($sk1 >= 10 && $sk1 <=90) {
    $sum += $sk1;
    $count++;
}
if($sk2 >= 10 && $sk2 <=90) {
    $sum += $sk2;
    $count++;
}
if($sk3 >= 10 && $sk3 <=90) {
    $sum += $sk3 ;
    $count++;
}
// echo '<br>';
// echo $sum;
if($count > 1) {
    $vid2 = round($sum / $count, 0);
} else {
    $vid2 = $sum;
}
$vid1 = round(($sk1 + $sk2 + $sk3) / 3, 0);
echo "$sk1 $sk2 $sk3 => vid1: $vid1 vid2: $vid2";
?>
</body> 