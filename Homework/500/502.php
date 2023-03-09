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
// echo '<pre>';
$arr = [];
foreach(range(0,9) as $i) {
    foreach(range(0, 4) as $j) {
        $arr[$i][$j] = rand(5, 25);
    }
}
// print_r($arr);
foreach($arr as $v) : ?>
<p style="margin: 0; font-size: 22px; margin-block: 0"><?= implode(' ',$v) ?> </p>
<?php
endforeach;
$count = 0;
foreach(range(0,9) as $i) {
    foreach(range(0, 4) as $j) {
        if($arr[$i][$j] > 10) {
            $count++;
        };
    };
};
?>
<p>b) <?= $count?></p>
<?php
foreach ($arr as $i => $v) {
    $sum[$i] = 0; 
    foreach($v as $h) {
        $sum[$i] += $h;
    };
};
?>
<p> c) <?= implode(' ',$sum) ?> </p>
<?php
foreach(range(0, 9) as $i) {
    $arr[$i][] = rand(5, 25);
    $arr[$i][] = rand(5, 25);
}
foreach($arr as $v) : ?>
<p style="margin: 0; font-size: 22px; margin-block: 0"><?= implode(' ',$v) ?> </p>
<?php
endforeach;
$rez = [];
foreach ($arr as $v) {
    $sum = 0; 
    foreach($v as $h) {
        $sum += $h;
    };
    $rez[] = $sum;
};
?>
<p> e) <?= implode(' ',$rez) ?> </p>

</body> 