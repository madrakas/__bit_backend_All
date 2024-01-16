<?php

class Grybas {
    private $valgomas;
    private $sukirmijes;
    private $svoris;

    public function __construct(){
        $this->valgomas = rand(0,1) === 0;
        $this->sukirmijes = rand(0,1) === 0;
        $this->svoris = rand(5, 45);
    }

    public function geroGryboSvoris(){
        if ($this->valgomas && !$this->sukirmijes){
            return $this->svoris;
        }else{
            return 0;
        }
    }
}