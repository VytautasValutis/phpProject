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
    foreach(range(0, rand(1,19)) as $j) {
        $arr[$i][$j] = chr(rand(65, 90));
    }
}
?>
<p>503)</p>
<?php
foreach($arr as $v) : ?>
<p style="margin: 0; font-size: 22px; margin-block: 0"><?= implode(' ',$v) ?> </p>
<?php
endforeach;
foreach(range(0, 9) as $i) {
    asort($arr[$i], SORT_STRING);
}
?>
<p>504)</p>
<?php
foreach($arr as $v) : ?>
<p style="margin: 0; font-size: 22px; margin-block: 0"><?= implode(' ',$v) ?> </p>
<?php
endforeach;
$long = [];
foreach($arr as $v) {
    $long[] = count($v);
}
?>
<p> ilgiai <?= implode(' ',$long) ?> </p>
<?php
// echo '<pre>';
asort($long, SORT_NUMERIC);
$long_key = array_keys($long);
$arr2 = [];
foreach($long_key as $k) {
    $arr2[] = array(...$arr[$k]);
}
$arr = [];
foreach($arr2 as $i => $v) {
    foreach($v as $h) {
        if($h === 'K') {
            $arr[] = array(...$arr2[$i]);
            unset($arr2[$i]);
            continue 2;
        };
    };
};
foreach($arr2 as $i => $v) {
    $arr[] = array(...$arr2[$i]);
}
foreach($arr as $v) : ?>
    <p style="margin: 0; font-size: 22px; margin-block: 0"><?= implode(' ',$v) ?> </p>
<?php
endforeach;

?>
</body> 