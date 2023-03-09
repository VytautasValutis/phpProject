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
// echo '<pre>';
function gogo(int $a) {
    $str = md5(time());
    // echo $str;
    $str = preg_replace_callback(
        '/[a-f]/',
        function($m) {
            return '';
        },
        $str
    );
    // echo '<br>'.$str;
return "<h2> $str </h2>";
}
?>
<?= gogo('a') ?>


</body> 

