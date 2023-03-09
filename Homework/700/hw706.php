<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $color = 'green';
} else {
    $color = 'yellow';   
}   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?= $color ?>">
    <form action="" method="post">
        <button type="submit">GREEN</button> 
    </form>
    <form action="" method="get">
        <button type="submit">YELLOW</button> 
    </form>

</body>
</html>