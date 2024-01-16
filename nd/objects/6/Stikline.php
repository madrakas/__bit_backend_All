<?php

class Stikline {
    private $turis = 0;
    private $kiekis = 0;

    public function ipilti($kiekis) {
        if (is_integer($kiekis) && $kiekis > 0){
            $this->kiekis = $this->kiekis + $kiekis > $this->turis ? $this->turis : $this->kiekis + $kiekis;  ;
        }
    }

    public function ispilti() {
        $ispiltine = $this->kiekis;
        $this->kiekis = 0;
        return $ispiltine;
    }

    public function __construct($turis){
        $this->turis = $turis;
    }

    public function koksKiekis(){
        return $this->kiekis;
    }
}