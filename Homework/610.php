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
function dalikliai(int $a) {
    $count = 0;
    if($a < 4) return 0;
    foreach(range(2, floor($a / 2)) as $k) {
        if($a  % $k === 0) $count++;
    }
return $count;
}

function pir_sk_vid($a) {
    $sum = 0;
    $count = 0;
    foreach($a as $v) {
        foreach($v as $d) {
            if(dalikliai($d) === 0) {
                $sum += $d;
                $count++;
            }
        }
    }
    if($count === 0) {
        return 0;
    } else {
        return $sum / $count;
    }
}

$arr = array_map(fn($_) => array_map(fn($_) => rand(1,100), range(0, 9)), range(0, 9));

foreach($arr as $v) {
    if(is_array($v)) : ?>    
<p style="margin: 0; font-size: 22px; margin-block: 0"><?= implode(' ',$v) ?> </p>
<?php else : ?>
<p style="margin: 0; font-size: 22px; margin-block: 0"> <?= $v ?> <p>
<?php endif;
};
echo '------------------------';

while(pir_sk_vid($arr) < 70) : ?>
    <?php
    $eil_min = [];
    $ind_arr_j = [];
    foreach($arr as $v) {
        $min_loc = min($v);
        $eil_min[] = $min_loc;
        $ind_arr_j[] = array_search($min_loc, $v);
    }
    $arr_min = min($eil_min);
    $ind_i = array_search($arr_min, $eil_min);
    $ind_j = $ind_arr_j[$ind_i];
    ?>
    <p> min: <?= $arr[$ind_i][$ind_j]?> i: <?= $ind_i?> j: <?= $ind_j?></p>
    <?php
    $arr[$ind_i][$ind_j] += 3;
?>
<?php endwhile ?>
<?php
foreach($arr as $v) {
    if(is_array($v)) : ?>    
<p style="margin: 0; font-size: 22px; margin-block: 0"><?= implode(' ',$v) ?> </p>
<?php else : ?>
<p style="margin: 0; font-size: 22px; margin-block: 0"> <?= $v ?> <p>
<?php endif;
};
?>


</body> 

