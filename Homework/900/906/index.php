<?php
require __DIR__ . '/Stikline.php';


$stik200 = new Stikline(200) ;
$stik150 = new Stikline(150);
$stik100 = new Stikline(100);

$stik100->ipilti($stik150->ipilti($stik200->ipilti(1200)->ispilti())->ispilti());

var_dump($stik200); echo '<br>';
var_dump($stik150); echo '<br>';
var_dump($stik100); echo '<br>';


