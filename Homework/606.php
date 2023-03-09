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
    foreach(range(2, $a / 2) as $k) {
        if($a  % $k === 0) $count++;
    }
return $count;
}

$arr = array_map(fn($_) => rand(333,777), range(0, 99));
?>
<p style="margin: 0; font-size: 22px; margin-block: 0"><?= implode(' ',$arr) ?> </p> 
<?php
foreach($arr as $i => $v) {
    iF(dalikliai($v) === 0) {
        unset($arr[$i]);
    }
};
?>
<p style="margin: 0; font-size: 22px; margin-block: 0"><?= implode(' ',$arr) ?> </p>

</body> 

