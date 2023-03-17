<?php

class Krepsys {
    public const DYDIS = 500;
    private $svoris = 0;

    public function iKrepsi (int $grybas) :void 
    {
        $this->svoris += $grybas;
    }
    public function krepsioSvoris () :int 
    {
        return $this->svoris;
    }
}

