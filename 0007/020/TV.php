<?php

class TV {

    private $kanalai = [
        5 => 'discovery',
        7 => 'Animal planet',
        55 => 'MTV'
    ];
    public $kanalas = 5;

    public $gamintojas = 'samsung';

    // public static function kanalai() 
    // {
    //     // return TV::$kanalai;
    //     return self::$kanalai;
    // }

    public function koksKanalasIjungtas()
    {
        echo '<h3>' . $this->kanalai[$this->kanalas] . '</h3>';
    }

    
}
