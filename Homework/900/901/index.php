<?php
require __DIR__ . '/Kibiras1.php';


$kib = new Kibiras1;

echo '<br> Pririnkta : ' . $kib->kiekPririnktaAkmenu();
$kib->prideti1Akmeni();
echo '<br> Pririnkta : ' . $kib->kiekPririnktaAkmenu();
$kib->pridetiDaugAkmenu(5);
echo '<br> Pririnkta : ' . $kib->kiekPririnktaAkmenu();


