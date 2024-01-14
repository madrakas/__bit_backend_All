<?php 

    class Kibiras {
        private $akmenuKiekis = 0;

        public function prideti1Akmeni(){
            $this->akmenuKiekis++;
        }

        public function pridetiDaugAkmenu($kiekis){
            if ($kiekis > 0){
                $this->akmenuKiekis += $kiekis;
            }
        }

        public function kiekPririnktaAkmenu(){
            return($this->akmenuKiekis);
        }
    }

