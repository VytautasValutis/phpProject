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

$kint = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$kint2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$arr = explode(',',implode(',',str_word_count($kint,1)).','.implode(',',str_word_count($kint2,1,'ąų')));
// print_r($arr);
$rez = $arr[rand(0, 21)];
for ($i=1; $i < 10; $i++) { 
    $rez = $rez.' '.$arr[rand(0, 21)];
}
print_r($rez);

?>
</body> 