<?php

require __DIR__ . '/TV.php';
require __DIR__ . '/Cart.php';

$tv1 = new TV;
$tv2 = new TV;
$tv3 = new TV;

$tv1->kanalas = 7;
$tv2->kanalas = 55;

// echo $tv1->koksKanalasIjungtas();
// echo $tv1->gamintojas;

$cart1 = new Cart;
$cart1 = new Cart;

echo '<pre>';

var_dump($car1);
var_dump($car2);

// print_r($tv1->kanalai());
// print_r(TV::kanalai());

