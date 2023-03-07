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
foreach(range(0, 29) as $i) {
    $arr[$i]['user_id'] = rand(1, 1000000);
    $arr[$i]['place_in_row'] = rand(0, 100);
}
foreach($arr as $v) : ?>
<p style="margin: 0; font-size: 22px; margin-block: 0"><?= implode(' ',$v) ?> </p>
<?php
endforeach;
$key_val = array_column($arr, 'user_id');
array_multisort($key_val, SORT_ASC, $arr);
echo '-----------------------';
foreach($arr as $v) : ?>
<p style="margin: 0; font-size: 22px; margin-block: 0"><?= implode(' ',$v) ?> </p>
<?php
endforeach;
$key_val = array_column($arr, 'place_in_row');
array_multisort($key_val, SORT_DESC, $arr);
echo '-----------------------';
foreach($arr as $v) : ?>
<p style="margin: 0; font-size: 22px; margin-block: 0"><?= implode(' ',$v) ?> </p>
<?php
endforeach;
?>
</body> 

