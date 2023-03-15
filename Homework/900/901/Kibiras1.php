<?php

class Kibiras1 {

    protected $akmenuKiekis = 0;

    public function kiekPririnktaAkmenu() {
        return $this->akmenuKiekis;
    }

    public function prideti1Akmeni() {
        $this->akmenuKiekis++; 
    }

    public function pridetiDaugAkmenu($num) {
        $this->akmenuKiekis += $num;
    }
}