<?php

class Tv{

    private static $kanalai = ['TV3', 'LNK', 'LRT', 'Polonia1'];
    static private $visiTelevizoriai = [];

    public $gamintojas;
    public $savininkas;
    private $kanalas='nenustatytas';

    public function __construct($gaminotjas, $savininkas) {
        $this->gamintojas = $gaminotjas;
        $this->savininkas = $savininkas;
        self::$visiTelevizoriai[] = $this;
    }

    public function kaRodo(){
        echo $this->savininkas . ' šiuo metu žiūri '. $this->kanalas . ' per ' . $this->gamintojas . ' televizorių.<br/>';
    }

    static public function keistiKanalus($naujiKanalai){
        self::$kanalai = $naujiKanalai;
        foreach(self::$visiTelevizoriai as $tv) {
            echo 'Keičiam kanalus televizoriui ' . $tv->savininkas . '<br/>';
        }
    }


    public function perjungtiPrograma($kanaloNumeris){
        // if ($kanaloNumeris < 0 || $kanaloNumeris > count(Tv::$kanalai)) {
        if ($kanaloNumeris < 0 || $kanaloNumeris > count(self::$kanalai)) {
            return;    
        }
        // $this->kanalas = Tv::$kanalai[$kanaloNumeris - 1];
        $this->kanalas = self::$kanalai[$kanaloNumeris - 1];
    }

    public function hack($ka){
        foreach(self::$visiTelevizoriai as $tv){
            if ($tv->savininkas === $ka){
                $tv->kanalas = 'HACKED';
            }
        }
    }

}