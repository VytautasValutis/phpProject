<?php
//POST METODAS
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = (int) $_GET['id'];
    $users = unserialize(file_get_contents(__DIR__ . '/users.ser'));

    foreach($users as $user) {
        if($user['place_in_row'] == (int) $_POST['row']) {
            $_SESSION['msg'] = ['type' => 'error', 'text' => 'row is invalid'];
            header('Location: http://localhost/phpProject/014/edit.php?id=.$id');
            break;
        }
    }

    foreach($users as &$user) {
        if($user[$user_id] == $id) {
            $user['name'] = $_POST['name'];
            $user['surname'] = $_POST['surname'];
            $user['place_in_row'] = $_POST['row'];
            $users = serialize($users);
            file_put_contents(__DIR__ . '/users.ser', $users);
                    break;
        }
    }

    header('Location: http://localhost/phpProject/014/users.php');
    die;
}
//GET METODAS

$users = unserialize(file_get_contents(__DIR__ . '/users.ser'));
$id = (int) $_GET['id'];

$find = false;
foreach($users as $user) {
    if($user[$user_id] == $id) {
        $find = true;
        break;
    }
}

if(!$find) {
    die('User not found');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <?php require __DIR__ . '/menu.php' ?>
    <form action ="?id=<?= $user['id'] ?>" method="post">
        <fieldset>
            <legend>Add new</legend>
            <label>name:</label>
            <input type="text" name="name" value=<?= $user['name']?>>
            <label>surname:</label>
            <input type="text" name="surname" value=<?= $user['surname']?>>
            <label>row:</label>
            <input type="text" name="place_in_row" value=<?= $user['row']?>>
            <button type="submit">SAVE</button>
        </fieldset>
    </form>
</body>
</html>