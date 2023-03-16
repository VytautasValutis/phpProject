<?php
require __DIR__ . '/Stikline.php';


$stik200 = new Stikline(200) ;
$stik150 = new Stikline(150);
$stik100 = new Stikline(100);

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


