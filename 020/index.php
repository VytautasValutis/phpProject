<?php

require __DIR__ . '/TV.php';
require __DIR__ . '/Cart.php';
require __DIR__ . '/Tevas.php';
require __DIR__ . '/Vaikas.php';
require __DIR__ . '/FontSize.php';
require __DIR__ . '/Word.php';
require __DIR__ . '/Color.php';


Vaikas::sayName();

$tv1 = new TV;
$tv2 = new TV;
$tv3 = new TV;

$tv1->kanalas = 7;
$tv2->kanalas = 55;

// echo $tv1->koksKanalasIjungtas();
// echo $tv1->gamintojas;

$cart1 = Cart::makeCart();
$cart2 = Cart::makeCart();

echo '<pre>';

var_dump($car1);
var_dump($car2);

// print_r($tv1->kanalai());
// print_r(TV::kanalai());

$word = new Word;