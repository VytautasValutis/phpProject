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
$str = '';
$count = 0;
do {
    $skc = rand(1, 200);
    if(strpos($str, $skc) === false) {
        $str = $str.' '.$skc;
        $count++;
    }
 } while($count < 50); ?>
<p><?= $str ?></p>
<?php
preg_match_all('/\d+/', $str, $arr);
sort($arr[0], SORT_NUMERIC);
$str = '';
foreach($arr[0] as $el) {
    $k = 2;
    do {
        if($el % +$k === 0 ) {
            continue 2;
        }
        $k++;
    }
    while( $k < $el / 2 );
    $str = $str.' '.$el;
}
?>
<p><?= $str ?></p>

</body> 