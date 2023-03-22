<?php

// spl_autoload_register(function($class) {
//     echo'<h3> R - 1 </h3>';
// });


require __DIR__ . '/uztvankos/bebro/Go.php';
require __DIR__ . '/Ievos/Pievos/Read.php';
require __DIR__ . '/petro/Read.php';

$stock = new Ievos\Pievos\Read;
$cosmos = new Petro\Read;
