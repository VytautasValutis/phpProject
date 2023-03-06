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
$a = rand(1000, 9999);
$b = rand(1000, 9999);
$c = rand(1000, 9999);
$d = rand(1000, 9999);
$e = rand(1000, 9999);
$f = rand(1000, 9999);
echo "Sugeneruota: $a $b $c $d $e $f <br>";
switch(min($a,$b,$c,$d,$e,$f)) {
    case $a: $rez = ''.$a; $a = 10000; break;
    case $b: $rez = ''.$b; $b = 10000; break;
    case $c: $rez = ''.$c; $c = 10000; break;
    case $d: $rez = ''.$d; $d = 10000; break;
    case $e: $rez = ''.$e; $e = 10000; break;
    case $f: $rez = ''.$f; $f = 10000; break;
}
switch(min($a,$b,$c,$d,$e,$f)) {
    case $a: $rez = $rez.' '.$a; $a = 10000; break;
    case $b: $rez = $rez.' '.$b; $b = 10000; break;
    case $c: $rez = $rez.' '.$c; $c = 10000; break;
    case $d: $rez = $rez.' '.$d; $d = 10000; break;
    case $e: $rez = $rez.' '.$e; $e = 10000; break;
    case $f: $rez = $rez.' '.$f; $f = 10000; break;
}
switch(min($a,$b,$c,$d,$e,$f)) {
    case $a: $rez = $rez.' '.$a; $a = 10000; break;
    case $b: $rez = $rez.' '.$b; $b = 10000; break;
    case $c: $rez = $rez.' '.$c; $c = 10000; break;
    case $d: $rez = $rez.' '.$d; $d = 10000; break;
    case $e: $rez = $rez.' '.$e; $e = 10000; break;
    case $f: $rez = $rez.' '.$f; $f = 10000; break;
}
switch(min($a,$b,$c,$d,$e,$f)) {
    case $a: $rez = $rez.' '.$a; $a = 10000; break;
    case $b: $rez = $rez.' '.$b; $b = 10000; break;
    case $c: $rez = $rez.' '.$c; $c = 10000; break;
    case $d: $rez = $rez.' '.$d; $d = 10000; break;
    case $e: $rez = $rez.' '.$e; $e = 10000; break;
    case $f: $rez = $rez.' '.$f; $f = 10000; break;
}
switch(min($a,$b,$c,$d,$e,$f)) {
    case $a: $rez = $rez.' '.$a; $a = 10000; break;
    case $b: $rez = $rez.' '.$b; $b = 10000; break;
    case $c: $rez = $rez.' '.$c; $c = 10000; break;
    case $d: $rez = $rez.' '.$d; $d = 10000; break;
    case $e: $rez = $rez.' '.$e; $e = 10000; break;
    case $f: $rez = $rez.' '.$f; $f = 10000; break;
}
switch(min($a,$b,$c,$d,$e,$f)) {
    case $a: $rez = $rez.' '.$a; $a = 10000; break;
    case $b: $rez = $rez.' '.$b; $b = 10000; break;
    case $c: $rez = $rez.' '.$c; $c = 10000; break;
    case $d: $rez = $rez.' '.$d; $d = 10000; break;
    case $e: $rez = $rez.' '.$e; $e = 10000; break;
    case $f: $rez = $rez.' '.$f; $f = 10000; break;
}
var_dump($rez);
echo "$rez";

?>
</body> 