<?php

class Stikline {
    private $turis;
    private $kiekis = 0;

    public function __construct(int $kiek) {
        $this->turis = $kiek;
    }

    public function ipilti(int $kiekis) :self
    {
        // if($this->kiekis + $kiekis >= $this->turis) {
        //     $this->kiekis = $this->turis;  
        // } else {
        //     $this->kiekis += $kiekis;  
        // }
        $this->kiekis = min($this->turis, $this->kiekis + $kiekis);
        return $this;
    }
    public function ispilti() :int
    {
        $temp = $this->kiekis;
        $this->kiekis = 0;
        return $temp;
    }
}
