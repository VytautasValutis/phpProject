<?php
foreach(range('A',chr(rand(67,75))) as $k) {
    $arr[] = $k;
};
$color = '#fff';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: black">
    <form action="" method="post">
        <?php foreach($arr as $v) :?>
    <input type="checkbox" id="check<?= $v ?>" name="check<?= $v ?>" value="<?= $v ?>">
<label style="color:<?= $color ?>" for="check<?= $v ?>"> <?= $v ?></label><br>
<?php endforeach ?>
        <button type="submit">CLICK ME</button> 
    </form>

</body>
</html>