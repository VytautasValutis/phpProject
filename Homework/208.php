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
$kint = 'Star Wars: Episode '.str_repeat(' ',rand(0, 5)).rand(1, 9).' - A New Hope';
echo $kint.'<br>';
echo substr($kint, stripos($kint, '-') - 2, 1);
?>
</body> 