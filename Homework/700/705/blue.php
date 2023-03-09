<?php
if(isset($_GET["next"])) {
    header('Location: http://localhost/phpProject/Homework/700/705/red.php');
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
<body style="background-color: blue">
    <a style="color: #fff" href="http://localhost/phpProject/Homework/700/705/blue.php?next=1">Next</a> 

</body>
</html>