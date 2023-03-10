<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $color = '#000';
    $colorb = '#fff';
    $arr = [];
    $rez = count($_POST);
    $id = (int) $_GET['viso'];

} else {
    foreach(range('A',chr(rand(67,75))) as $k) {
        $arr[] = $k;
    };
    $arr_count = count($arr);
    $color = '#fff';
    $colorb = '#000';
    $rez = -1;
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
<body style="background-color: <?= $colorb ?>">
    <form action="http://localhost/phpProject/Homework/700/hw710.php?viso=<?= $arr_count ?>" method="post">
        <?php foreach($arr as $v) :?>
    <input type="checkbox" id="check<?= $v ?>" name="check<?= $v ?>" value="<?= $v ?>">
<label style="color:<?= $color ?>" for="check<?= $v ?>"> <?= $v ?></label><br>
<?php endforeach ?>
<?php if($rez >= 0) : ?>
        <h1> Sugeneruota: <?= $id ?> Pasirinkta: <?= $rez ?> </h1>
        <?php else : ?>
        <button type="submit">CLICK ME</button> 
        <?php endif ?>

    </form>

</body>
</html>