<?php
require __DIR__ . '/Pinigine.php';


$pin = new Pinigine;

$pin->skaiciuoti();
$pin->ideti(2);
$pin->skaiciuoti();
$pin->ideti(5);
echo '<br>';
var_dump($pin);
$pin->skaiciuoti();



