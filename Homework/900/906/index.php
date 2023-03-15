<?php
require __DIR__ . '/Stikline.php';


$stik200 = new Stikline;
$stik200->stiklinesTuris(200);
$stik150 = new Stikline;
$stik150->stiklinesTuris(150);
$stik100 = new Stikline;
$stik100->stiklinesTuris(100);

// var_dump($stik200); echo '<br>';
// var_dump($stik150); echo '<br>';
// var_dump($stik100); echo '<br>';

$stik200->ipilti(150);
// var_dump($stik200); echo '<br>';
$stik200->ipilti(100);
// var_dump($stik200); echo '<br>';
$stik150->ipilti($stik200->ispilti());
// var_dump($stik200); echo '<br>';
// var_dump($stik150); echo '<br>';
$stik100->ipilti($stik150->ispilti());

var_dump($stik200); echo '<br>';
var_dump($stik150); echo '<br>';
var_dump($stik100); echo '<br>';


