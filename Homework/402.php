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
$arr = array_fill(0,29,0);
foreach(range(0,29) as $i) {
    $arr[$i] = rand(5,25);
}; ?>
<p><?= implode(' ',$arr)?></p>
<?php
$count = 0;
foreach($arr as $k) {
    if($k > 10) { $count++; };
};
?>
<p>a) <?= $count ?></p>
<?php
$max_sk = (max($arr));
$max_sk_ind = implode(' ',array_keys($arr,$max_sk));
?>
<p>b) <?= $max_sk ?> => <?= $max_sk_ind ?></p>
<?php
$sum = 0;
for ($i=0; $i < 29; $i+=2) { 
    $sum += $arr[$i];
};
?>
<p>c) <?= $sum ?></p>
<?php
$arr2 = [];
foreach ($arr as $i => $el) {
    $arr2[] = $el - $i;
};
?>
<p>d) <?= implode(' ',$arr2)?></p>
<?php
foreach(range(1,10) as $_) {
    $arr[] = rand(5,25);
};
?>
<p>e) <?= implode(' ',$arr)?></p>
<?php
$arr3 = [];
$arr4 = [];
foreach(range(0,39) as $i) {
    if($i % 2 === 0) {
        $arr3[] = $arr[$i];
    } else {
        $arr4[] = $arr[$i];
    };
};
?>
<p>f) <?= implode(' ',$arr3)?></p>
<p>.. <?= implode(' ',$arr4)?></p>
<?php
foreach(range(0,39) as $i) {
    if($i % 2 === 0 && $arr[$i] > 15) {
        $arr[$i] = 0;
    };    
};
?>
<p>g) <?= implode(' ',$arr)?></p>
<?php
$i = 0;
while ($arr[$i] <= 10) {
    $i++;
};
?>
<p>h) <?= $i ?></p>
<?php
foreach(range(0,39) as $i) {
    if($i % 2 === 0) {
        unset($arr[$i]);
    };    
};
?>
<p>i) <?= implode(' ',$arr)?></p>
</body> 