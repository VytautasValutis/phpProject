<?php

namespace App;
use App\Controllers\HomeController;
use App\Controllers\ClientsController;

class App {

    public static function process () {

        $url = explode('/',$_SERVER['REQUEST_URI']);
        array_shift($url);

        return self::router($url);
    }

    private static function router(array $url) 
    {
        $method = $_SERVER['REQUEST_METHOD'];

        if($method == 'GET' && count($url) == 1 && $url[0] === '') {
            return (new HomeController)->home();
        } 

        if($method == 'GET' && count($url) == 2 && $url[0] === 'clients' && $url[1] === 'create') {
            return (new ClientsController)->create();
        } 
        
        else {
            return '404 PAGE NOT FOUND';
        }

    }

    public static function view($tmp, $data = [])
    {
       extract($data);
       $path = __DIR__ . '/../views/';
       ob_start();
       require $path . 'top.php';
       require $path . $tmp . '.php';
       require $path . 'bottom.php';
       $html = ob_get_contents();
       ob_clean();
       return $html;
    }

}
