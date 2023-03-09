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
foreach(range(0, 9) as $i) {
    $num = rand(0, 5);
    if($num === 0) {
        $arr[$i] = rand(0, 10);
    } else {
        foreach(range(0, $num - 1) as $j) {
            $arr[$i][$j] = rand(0, 10);
        };
    };
};
foreach($arr as $v) {
    if(is_array($v)) : ?>    
<p style="margin: 0; font-size: 22px; margin-block: 0"><?= implode(' ',$v) ?> </p>
<?php else : ?>
<p style="margin: 0; font-size: 22px; margin-block: 0"> <?= $v ?> <p>
<?php endif;
};
echo '------------------------';
$sum = 0;
foreach($arr as $v) {
    if(is_array($v)) {
        foreach($v as $h) {
            $sum += $h;
        };
    } else {
        $sum += $v;
    };
}
?>
<p> suma : <?= $sum ?></p>
<?php
echo '------------------------';
$key = [];
foreach($arr as $v) {
    if(is_array($v)) {
        $ss = 0;
        foreach($v as $h) {
            $ss += $h;
        };
        $key[] = $ss;
    } else {
        $key[] = $v;
    };
};
asort($key, SORT_NUMERIC);
$sort_key = array_keys($key);
unset($k);
$arr2 = [];
foreach($sort_key as $k) {
    if(is_array($arr[$k])) {
        $arr2[] = array(...$arr[$k]);
    } else {
        $arr2[] = $arr[$k];
    }
};
foreach($arr2 as $v) {
    if(is_array($v)) : ?>    
<p style="margin: 0; font-size: 22px; margin-block: 0"><?= implode(' ',$v) ?> </p>
<?php else : ?>
<p style="margin: 0; font-size: 22px; margin-block: 0"> <?= $v ?> <p>
<?php endif;
};
echo '------------------------';
?>
</body> 

