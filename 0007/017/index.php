<?php

require __DIR__ . '/Bebras.php';

$bebras1 = new Bebras;
$bebras2 = new Bebras;
$bebras3 = $bebras1;

echo '<pre>';

var_dump($bebras1);
var_dump($bebras2);

function fun($obj) {
    var_dump($obj);
}

fun($bebras2);

echo "\n\n" . $bebras2->spalva;
echo "\n\n" . $bebras2->kokiaTavoSpalva();

// $bebras2();

echo $bebras1->spalva;
