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
$count = 0;
do {
    $skc = rand(0, 300);
    if(in_array($skc, $arr) === false) {
        $arr[] = $skc;
        $count++;
    }
 } while($count < 101);
rsort($arr, SORT_NUMERIC);
?>
<p> <?= implode(' ',$arr)?></p>
<?php
$arr2[50] = $arr[0]; 
foreach(range(1,50) as $i) {
    $arr2[50 - $i] = $arr[$i * 2 - 1];
    $arr2[50 + $i] = $arr[$i * 2];
}
ksort($arr2, SORT_NUMERIC);
?>
<p> <?= implode(' ',$arr2)?></p>
<?php
$sumL = 0;
$sumR = 0;
foreach(range(0, 49) as $i) {
    $sumL += $arr2[$i]; 
    $sumR += $arr2[51 + $i]; 
};
$diff = abs($sumL - $sumR);
?>
<p> Left : <?= $sumL ?> Rigth : <?= $sumR?> </p>
<p> Diff : <?= $diff ?></p>
<?php
$i = 0;
while($diff > 30 && $i < 51) {
    $i++;
    if($sumL > $sumR && $arr2[50 - $i] > $arr2[50 + $i] ||
    $sumL < $sumR && $arr2[50 - $i] < $arr2[50 + $i]
    ) {
        $sumL = $sumL - $arr2[50 - $i] + $arr2[50 + $i];
        $sumR = $sumR + $arr2[50 - $i] - $arr2[50 + $i];
        $tmp = $arr2[50 - $i];
        $arr2[50 - $i] = $arr2[50 + $i];
        $arr2[50 + $i] = $tmp;
        $diff = abs($sumL - $sumR);
    }
};
?>
<p> Left : <?= $sumL ?> Rigth : <?= $sumR?> </p>

</body> 