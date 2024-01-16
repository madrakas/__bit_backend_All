<?php 

class Pinigine2 extends Pinigine {

    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;


    public function monetos(){
        return $this->metaliniaiPinigai;
    }

    public function banknotai(){
        return $this->popieriniaiPinigai;
    }
}