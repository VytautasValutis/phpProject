<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body>
<?php
echo '<pre>';
$arr1 = [];
foreach(range(1,200) as $_) {
    $arr1[] = chr(rand(65,68));
 };
 $arr2 = [];
 foreach(range(1,200) as $_) {
     $arr2[] = chr(rand(65,68));
  };
  $arr3 = [];
  foreach(range(1,200) as $_) {
      $arr3[] = chr(rand(65,68));
   };
$arr4 = [];
foreach(range(0,199) as $i) {
    $arr4[] = $arr1[$i].$arr2[$i].$arr3[$i];
};
?>
<p><?= implode(' ',$arr4) ?></p>
<?php
$stat = array_count_values($arr4);
$po1 = count(array_keys($stat,1));
$viso = count($stat);
?>
<p>Unikaliu : <?= $po1 ?> Viso: <?= $viso ?></p>
</body> 