<?php
    session_start();
    $users_ = unserialize(file_get_contents(__DIR__ . '/users.ser'));
    $all = ceil(count($users_) / 10);
    ?>
<?php foreach(range(1, $all) as $page) : ?>
    <a href="http://localhost/phpProject/014/users.php?page=<?=  $page ?>&sort=<?= $sort ?? '' ?>">PAGE <?= $page ?></a> 
<?php endforeach ?>

    <a href="http://localhost/phpProject/014/create.php">Add new</a> 
<?php
    if(isset($_SESSION['msg'])) {
        $$msg = $_SESSION['msg'];
        unset($_SESSION['msg']);
        $color = match($msg['type']) {
            'error' => 'red',
            'ok' => 'blue', 
            'default' => 'gray'
        };
    };
?>
<?php if(isset($msg)) : ?>
    <h2 style="color: red">
        viskas blogai
</h2>

<?php endif ?>