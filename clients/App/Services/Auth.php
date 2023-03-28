<?php

namespace App\Services;

class Auth {

    private $user;
    private static $auth;

    public static function msg()
    {
        return self::auth ?? self::$auth = new self;
    }

    private function __construct()
    {
        if(isset($_SESSION['user'])) {
            $this->user = $_SESSION['user'];
        }
    }

    public function login(string $name, string $psw) : bool
    {
        $users = json_decode(file_get_contents(__DIR__ .'/../DB/users.json'),1);
        foreach($users as $user) {
            if($user['name'] == $name && $user['psw'] == md5($psw)) {
                $_SESSION['user'] = $user['name'];
                return true;
            }
        }
        Messages::msg()->addMessage('invalid password or user name','danger');
        return false;
    }

}