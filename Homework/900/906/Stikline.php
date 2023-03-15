<?php

class Stikline {
    private $turis;
    private $kiekis = 0;

    public function stiklinesTuris($sk) {
        $this->turis = $sk;
    }
    public function ipilti($kiekis) {
        if($this->kiekis + $kiekis >= $this->turis) {
            $this->kiekis = $this->turis;  
        } else {
            $this->kiekis += $kiekis;  
        }
    }
    public function ispilti() {
        $temp = $this->kiekis;
        $this->kiekis = 0;
        return $temp;
    }
}
