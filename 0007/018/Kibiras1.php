<?php

class Kibiras1 {
    protected $akmenuKiekis;

    public function __construct() {
        $this->akmenuKiekis = 0;
    }

    public function prideti1Akmeni() :void
    {
        $this->akmenuKiekis++;
    }

    public function pridetiDaugAkmenu(int $kiekis) :void
    {
        $this->akmenuKiekis += $kiekis;
    }
    public function kiekPririnktaAkmenu() :void 
    {
        echo '<h2> Pririnkta : ' . $this->akmenuKiekis . '</h2>';
    }

}

