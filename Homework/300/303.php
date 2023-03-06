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
<span>77</span>
<?php for ($i=154; $i < rand(3000, 4000); $i+=77) : ?>
        <span><?= ','.$i ?></span>
<?php endfor ?>


</body> 