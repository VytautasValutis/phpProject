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

// echo '<h1 class="rezstyle">';
$sk1  = rand(-10,10);
$sk2  = rand(-10,10);
$sk3  = rand(-10,10);
$col1 = match($sk1 <=> 0) {
    -1 => 'green',
    0 => 'red',
    1 => 'blue', 
};
$col2 = match($sk2 <=> 0) {
    -1 => 'green',
    0 => 'red',
    1 => 'blue', 
};
$col3 = match($sk3 <=> 0) {
    -1 => 'green',
    0 => 'red',
    1 => 'blue', 
};
echo "<span style='color: $col1'> $sk1 </span>
    <span style='color: $col2'> $sk2 </span>
    <span style='color: $col3'> $sk3 </span>";
?>
</body> 