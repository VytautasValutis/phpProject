<?php

// file_put_contents(__DIR__.'/labas.txt',"\n Labas", FILE_APPEND);

// if(!file_exists(__DIR__.'/data.json')) {
//     $data = [];
// } else {
//     $data = file_get_contents(__DIR__.'/data.json');
//     $data = json_decode($data);
// }

// echo '<pre>';
// print_r($data);

// $data[] = ['number' => rand(100, 999), 'color' => rand(0,1) ? 'red' : 'blue'];

// $data = json_encode($data);
// file_put_contents(__DIR__. '/data.json', $data);



if(!file_exists(__DIR__.'/data.ser')) {
    $data = [];
} else {
    $data = file_get_contents(__DIR__.'/data.ser');
    $data = unserialize($data);
}

echo '<pre>';
print_r($data);

$data[] = ['number' => rand(100, 999), 'color' => rand(0,1) ? 'red' : 'blue'];

$data = serialize($data);
file_put_contents(__DIR__. '/data.ser', $data);
