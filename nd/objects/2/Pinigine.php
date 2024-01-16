<?php

    class Pinigine{
        private $popieriniaiPinigai = 0;
        private $metaliniaiPinigai = 0;




        public function ideti($kiekis){

            echo 'Įdedami pinigai ' . $kiekis . '<br/>';

            $whole = floor($kiekis); 
            $fraction = $kiekis - $whole; 
            $this->metaliniaiPinigai += round($fraction, 2);

            if ($whole < 2){
                $this->metaliniaiPinigai += $whole;
            }else{
                $this->popieriniaiPinigai += $whole;

            }
        }

        public function skaiciuoti(){
            echo 'Popieriniai: ' . $this->popieriniaiPinigai . '<br/>';
            echo 'Metaliniai: ' . $this->metaliniaiPinigai . '<br/>';
        }
    }
?>