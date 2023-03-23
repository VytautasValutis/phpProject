<?php

if($_SERVER['REQUEST_METHOD'] != 'POST' || !isset($_GET['id'])) {
    http_response_code(400);
}

$id = (int) $_GET['id'];

$users = unserialize(file_get_contents(__DIR__ . '/users.ser'));

$users = array_filter($users, fn($users) => $users['user_id'] != $id);
$users = serialize($users);
file_put_contents(__DIR__ . '/users.ser', $users);

header('Location: http://localhost/phpProject/014/users.php');



