<?php 

class Kibiras2 {
    private $akmenuKiekis = 0;
    private static $akmenuKiekisVisuoseKibiruose = 0;

    public function prideti1Akmeni(){
        $this->akmenuKiekis++;
        self::$akmenuKiekisVisuoseKibiruose++;
    }

    public function pridetiDaugAkmenu($kiekis){
        if ($kiekis > 0){
            $this->akmenuKiekis += $kiekis;
            self::$akmenuKiekisVisuoseKibiruose += $kiekis;
        }
    }

    public function kiekPririnktaAkmenu(){
        return($this->akmenuKiekis);
    }

    public static function akmenuKiekisVisuoseKibiruose (){
        return self::$akmenuKiekisVisuoseKibiruose;
    }

}

