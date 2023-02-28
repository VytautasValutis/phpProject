<?php
$kintamasis1  = rand(0,4);
$kintamasis2  = rand(0,4);
if($kintamasis1 === 0 || $kintamasis2 === 0) {
    $rez = 0;
} else {
    if($kintamasis1 > $kintamasis2) {
        $rez = $kintamasis1 / $kintamasis2;
    } else {
        $rez = $kintamasis2 / $kintamasis1;
    }
};
echo 'k1 '.$kintamasis1.' k2 '.$kintamasis2.' rez = '.round($rez,2);