<?php

class Krepsys {
    public const DYDIS = 500;
    private $svoris = 0;

    // public function iKrepsi (int $grybas) :void 
    // {
    //     $this->svoris += $grybas;
    // }
    // public function krepsioSvoris () :int 
    // {
    //     return $this->svoris;
    // }
    public function iKrepsi(Grybas $grybas) : bool
    {
        if($grybas->valgomas && !$grybas->sukirmyjes) {
            $this->svoris += $grybas->svoris;
        }
        return self::DYDIS > $this->svoris;
    }
}

