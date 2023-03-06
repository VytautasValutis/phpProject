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
$arr[0] = rand(5,25);
$arr[1] = rand(5,25);
foreach(range(2,9) as $i) {
    $arr[$i] = $arr[$i - 1] + $arr[$i - 2];
};
?>
<p><?= implode(' ',$arr)?></p>

</body> 