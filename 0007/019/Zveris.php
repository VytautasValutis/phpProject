<?php

class Zveris  extends Miskas {

    public $rusis, $spalva;

    public function __construct(string $rusis, string $spalva)
    {
        $this->rusis = $rusis;
        $this->spalva = $spalva;

    }

    public function sayTBu() {

        return parent::bu();
    }

}