<?php



$animal = 'sss';
$animal2 = 'kkk';

function go(&$a) {
    global $animal;  // blogas istorinis palikimas

    $hello = 'labukas';
    echo $animal.'<br>';

    $a = 'lll';

    echo $a;
}

go($animal2);

echo '<br>'.$animal2;

function fun(...$all) {
    $count = 1;
    foreach($all as $v) {
        $count = $count * $v;
    };
    return $count;
};

$rez = fun(2, 3, 3, 4);
echo "<br> $rez ";

$arg = [3,3,3,3];
$rez = fun(...$arg);
echo "<br> $rez ";


function fun3() {
    
    static $c = 0;
    return ++$c;
};

$rez = fun3();
echo "<br> $rez ";

$rez = fun3();
echo "<br> $rez ";

$rez = fun3();
echo "<br> $rez ";


$fun4 = function() {
    echo '<h2 style="color: blue";'
};


