<?php

require __DIR__ . '/Kibiras2.php';
require __DIR__ . '/Kibiras3.php';
require __DIR__ . '/KibirasNePo1.php';
require __DIR__ . '/MarsoPalydovas.php';

// U3

$k1 = new Kibiras2;
$k1 = new Kibiras2;
$k1 = new Kibiras2;

$k1->prideti1Akmeni();
$k2->prideti1Akmeni();
$k3->pridetiDaugAkmenu(8);
$k1->prideti1Akmeni();
$k2->prideti1Akmeni();
$k3->pridetiDaugAkmenu(8);

echo '<pre>';
echo '<h1>'.$kibiras2::bendrasAkmenuKiekisS().'</h1>';
echo '<h1>'.$k3->bendrasAkmenuKiekisN().'</h1>';

// U4

$kk1 = new KibirasNePo1; 

//U5

$p1 = MarsoPalydovas::naujasPalydovas();
$p2 = MarsoPalydovas::naujasPalydovas();
$p3 = MarsoPalydovas::naujasPalydovas();
$p4 = MarsoPalydovas::naujasPalydovas();
$p5 = MarsoPalydovas::naujasPalydovas();

var_dump($p1);
var_dump($p2);
var_dump($p3);
var_dump($p4);
var_dump($p5);
