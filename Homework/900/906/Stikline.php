<?php

class Stikline {
    private $turis;
    private $kiekis = 0;

    public function __construct(int $kiek) {
        $this->turis = $kiek;
    }

    public function ipilti(int $kiekis) :void
    {
        if($this->kiekis + $kiekis >= $this->turis) {
            $this->kiekis = $this->turis;  
        } else {
            $this->kiekis += $kiekis;  
        }
    }
    public function ispilti()
    {
        $temp = $this->kiekis;
        $this->kiekis = 0;
        return $temp;
    }
}
