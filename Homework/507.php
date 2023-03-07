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
echo '------------------------';
foreach(range(0, 29) as $i) {
    $str = [];
    foreach(range(0, rand(4, 14)) as $_) {
        $str[] = chr(rand(97, 122));
    }
    $name = ucfirst(implode('',$str));
    $arr[$i]['name'] = $name;
    $str = [];
    foreach(range(0, rand(4, 14)) as $_) {
        $str[] = chr(rand(97, 122));
    }
    $name = ucfirst(implode('',$str));
    $arr[$i]['surname'] = $name;
}
foreach($arr as $v) : ?>
    <p style="margin: 0; font-size: 22px; margin-block: 0"><?= implode(' ',$v) ?> </p>
    <?php
    endforeach;
    ?>
</body> 

