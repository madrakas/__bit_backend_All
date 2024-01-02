<?php

class Nso {

    public $speed ='fast';
    // protected $color = 'red';
    private $weight = 'heavy';

    public $number;

    public function __construct($number, $color = 'red'){
        $this->number = $number;
        $this->color =  $color;
        echo "I'm NSO <br/>";
        $this->goSwim();
    }

    public function goFly() {
        echo "I'm flying " . $this->speed . "<br/>";
        echo "My color is " . $this->color . "<br/>";
        $this->goSwim();
    }

    private function goSwim() {
        echo "I'm swimming <br/>";
    }

    public function changeColor($color) {
        echo 'My color was ' . $this->color . '>br/>';
        echo 'Change to ' . $color . '<br/>';

        $this->color = $color;


    }
}

?>