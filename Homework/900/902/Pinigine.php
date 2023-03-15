<?php

class Pinigine {
    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;

    public function ideti($kiekis) {
        if($kiekis > 2) {
            $this->popieriniaiPinigai += $kiekis;
        } else {
            $this->metaliniaiPinigai += $kiekis;
        }
    }
    public function skaiciuoti() {
        echo '<br> Pinigu kiekis :'.($this->metaliniaiPinigai + $this->popieriniaiPinigai);
    }

}