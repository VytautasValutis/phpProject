<?php

class Bebras {
    // public $spalva = 'rudas'; 
    public $spalva; 

    public function __construct()
    {
        // echo '<h1>Naujas bebras</h1>';
        $this->spalva = ['rudas','pilkas','geltonas','juodas'][rand(0,3)];
    }
    // public function __destruct() 
    // {
    //     echo '<h1> Bebras dingo </h1>';
    // }
    public function __invoke()
    {
        echo '<h1> Alio </h1>';
    }

    public function kokiaTavoSpalva() {
        return $this->spalva;
    }
}