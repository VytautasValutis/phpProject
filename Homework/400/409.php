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
$arr1 = [];
$count = 0;
do {
    $skc = rand(100, 999);
    if(in_array($skc, $arr1) === false) {
        $arr1[] = $skc;
        $count++;
    }
 } while($count < 100);
$arr2 = [];
$count = 0;
do {
    $skc = rand(100, 999);
    if(in_array($skc, $arr2) === false) {
        $arr2[] = $skc;
        $count++;
    }
 } while($count < 100); 
 ?>
 <p> 406) <?= implode(' ',$arr1)?></p>
 <p> .... <?= implode(' ',$arr2)?></p>
 <?php
$arr3 = [];
foreach($arr1 as $w) {
    if(in_array($w, $arr2) === false) {
        $arr3[] = $w;
    };
};
?>
<p> 407) <?= implode(' ',$arr3)?></p>
<?php
$arr4 = [];
foreach($arr1 as $w) {
    if(in_array($w, $arr2) === true) {
        $arr4[] = $w;
    };
};
?>
<p> 408) <?= implode(' ',$arr4)?></p>
<?php
$arr5 = [];
foreach(range(0,99) as $i) {
    $arr5[$arr1[$i]] = $arr2[$i];
};
print_r($arr5);
?>

</body> 