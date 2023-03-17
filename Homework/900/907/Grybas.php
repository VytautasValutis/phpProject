<?php

class Grybas {
    private $valgomas;
    private $sukirmyjes;
    private $svoris;

    public function __construct()
    {
        $this->valgomas = rand(0,1);
        $this->sukirmyjes = rand(0,1);
        $this->svoris = rand(5,45);
    }    
    public function arValgomas() :bool 
    {
        return $this->valgomas;
    }
    public function arSukirmyjes() :bool
    {
        return $this->sukirmyjes;
    }
    public function gryboSvoris() :int
    {
        return $this->svoris;
    }
}

