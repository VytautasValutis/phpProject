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
$zvakes  = rand(5,3000);
$kaina = $zvakes;
if($kaina > 1000) {
    $kaina = $kaina * 0.97;
}
if($kaina > 2000) {
    $kaina = $kaina * 0.96;
}
$kaina = round($kaina, 2);
echo "Perka $zvakes zvakiu uz $kaina EUR";
?>
</body> 