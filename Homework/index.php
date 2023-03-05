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
$kint = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$kint2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$sum = 0;
foreach(str_word_count($kint, 1) as $w) {
    if(strlen($w) <= 5) {
        $sum++;
    }
};
echo $sum.'<br>';
$sum = 0;
foreach(str_word_count($kint2, 1 , 'ą') as $w) {
    if(strlen($w) <= 5) {
        $sum++;
    }
};
echo $sum;


?>
</body> 