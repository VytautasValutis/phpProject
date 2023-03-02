<?php

echo '<pre>';
 
$masyvas = ['A','B','C'];

$masyvas[99] = 'D';
$masyvas[33] = 'E';
$masyvas['- - -'] = 'F';
$masyvas[] = 'G';
// print_r ($masyvas);

// $json = json_encode($masyvas);
// print_r($json);

// echo '<br>';

// $arr =  array_values($masyvas);

// $json = json_encode($arr);
// print_r ($arr);

// array_pop
// array_shift
// array_unshift

// sort($masyvas);

foreach ($masyvas as $in => &$val) {
    // $masyvas[$in] = 'X';
    $val = 'Y';
    // echo '* '.$in.' => '.$val.'<br>';
}

// print_r ($masyvas);

// $v1 = 'A';
// $v2 = $v1;
// $v1 = 'B';

// echo $v1,' ',$v2,'<br>';

// $v1 = 'A';
// $v2 = &$v1;
// $v1 = 'B';

// echo $v1,' ',$v2,'<br>';

$m = ['A','B','C',['E','F'],'G','H'];
foreach($m as $v) {
    if(is_array($v)) {
        foreach($v as $v2) {
            echo $v2;
        } 
    } else {
        echo $v;
    }
}
