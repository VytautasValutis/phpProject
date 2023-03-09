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
$sk = rand(2, 999);
// echo '<pre>';
function dalikliai(int $a) {
    $count = 0;
    foreach(range(2, $a / 2) as $k) {
        if($a  % $k === 0) $count++;
    }
return $count;
}

$arr = array_map(fn($_) => rand(33,77), range(0, 99));
foreach($arr as $v) {
    $arr_dal[] = dalikliai($v);
};
?>
<p style="margin: 0; font-size: 22px; margin-block: 0"><?= implode(' ',$arr) ?> </p> 
<?php
array_multisort($arr_dal,SORT_DESC,$arr);
?>
<p style="margin: 0; font-size: 22px; margin-block: 0"><?= implode(' ',$arr) ?> </p>

</body> 

