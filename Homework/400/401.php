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
$arr = array_fill(0,29,0);
foreach(range(0,29) as $i) {
    $arr[$i] = rand(5,25);
};
print_r($arr);
?>
<p></p>

</body> 