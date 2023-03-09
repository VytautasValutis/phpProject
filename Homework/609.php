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
    foreach(range(2, $a / 2) as $k) {
        if($a  % $k === 0) $count++;
    }
return $count;
}

$arr = array_map(fn($_) => rand(1,33), range(0, 2));
?>
<p style="margin: 0; font-size: 22px; margin-block: 0"><?= implode(' ',$arr) ?> </p> 
<?php
while(dalikliai($arr[count($arr) - 1]) > 0 ||
    dalikliai($arr[count($arr) - 2]) > 0 ||
    dalikliai($arr[count($arr) - 3]) > 0
) {
    $arr[] = rand(1, 33);
}
?>
<p style="margin: 0; font-size: 22px; margin-block: 0"><?= implode(' ',$arr) ?> </p> 

</body> 

