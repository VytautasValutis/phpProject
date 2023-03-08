<?php
session_start();


// POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
    // code

    $_SESSION['animal'] = $_POST['animal'];
    $_SESSION['mn'] = $_POST['mn'];

    header('Location: http://localhost/phpProject/013/');
    die;
}
// GET

$animal = $_SESSION['animal'] ?? '';
$mn = $_SESSION['mn'] ?? '';
unset($_SESSION['animal'], $_SESSION['mn']);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>013</h1>
    <h2> <?= $animal ?> <?= $mn ?> </h2>  
    <form action="" method="post">
        <input type="text" name="animal">
        <input type="range" min="0" max="10" value="0" name="mn">
        <button type="submit">GO</button>
    </form>
</body>
</html>