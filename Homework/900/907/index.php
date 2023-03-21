<?php

require __DIR__ . '/Krepsys.php';
require __DIR__ . '/Grybas.php';
$krep = new Krepsys;
echo '<pre>';
while($krep->iKrepsi(new Grybas)) {}


// $k = 0;
// do {
//     $gryb[] = new Grybas;
//     if(!$gryb[$k]->arSukirmyjes() && $gryb[$k]->arValgomas()) {
//         $krep->iKrepsi($gryb[$k]->gryboSvoris());
//         $krep->grybas[] = $gryb[$k];
//     }
//     $k++;
// } while ($krep->krepsioSvoris() < $krep::DYDIS);
var_dump($krep);
