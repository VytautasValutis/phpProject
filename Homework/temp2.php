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
$a = rand(1000, 9999);
$b = rand(1000, 9999);
$c = rand(1000, 9999);
$d = rand(1000, 9999);
$e = rand(1000, 9999);
$f = rand(1000, 9999);
echo "Sugeneruota: $a $b $c $d $e $f <br>";

echo "min($a,$b)  min($b, $c)  min($c, $d)  min($d, $e)  min($e, $f)";

?>
</body> 