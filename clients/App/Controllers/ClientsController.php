<?php
namespace App\Controllers;
use App\App;

class ClientsController {

    public function create() {
        return App::view('clients/create',[
            'title' => 'New Client'
        ]);
    }
}