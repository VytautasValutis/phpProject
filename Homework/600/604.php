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
?>
<h1>Skaiciaus <?= $sk ?> dalikliai <?= dalikliai($sk) ?> </h1>


</body> 

