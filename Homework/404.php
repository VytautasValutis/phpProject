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
echo '<pre>';
$arr = [];
foreach(range(1,200) as $_) {
    $arr[] = chr(rand(65,68));
 };
?>
<p> 3. <?= implode(' ',$arr) ?></p>
<?php
$count_A = count(array_keys($arr,'A'));
$count_B = count(array_keys($arr,'B'));
$count_C = count(array_keys($arr,'C'));
$count_D = count(array_keys($arr,'D'));
?>
<p> A: <?= $count_A ?> B: <?= $count_B ?> C: <?= $count_C ?> D: <?= $count_D ?></p>
<?php
sort($arr);
?>
<p> 4. <?= implode(' ',$arr) ?></p>

</body> 