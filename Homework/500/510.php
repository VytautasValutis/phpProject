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
$smb = [0x23, 0x25, 0x2A, 0x2B, 0x40, 0xBE];
$col = ['0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F'];
$arr = [];
foreach(range(0, 9) as $i) {
    foreach(range(0, 9) as $j) {
        $arr[$i][$j]['value'] = chr($smb[rand(0, 5)]);
        $color = '#';
        foreach(range(0, 5) as $_) {
            $color = $color.$col[rand(0, 15)];
        };
        $arr[$i][$j]['color'] = $color;
    };
};
foreach(range(0, 9) as $i) : ?>
    <div>
        <?php foreach(range(0, 9) as $j) : ?>
            <span style="color: <?= $arr[$i][$j]['color']?>"><?= $arr[$i][$j]['value']?></span>
        <?php endforeach ?>
    </div>
<?php endforeach ?>

</body> 

