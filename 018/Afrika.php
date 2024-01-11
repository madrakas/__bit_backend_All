<?php

class Afrika {
    public $zemynas = 'Afrika';
    public $gyventojai = 1000000000;
    public $socialinisTinklas = 'Facebook';

    // private $mano = 'Stebuklas'; // privatus nepasiveldėja
    protected $mano = 'Stebuklas'; // protected bus paveldėtas, bet pasiekiamas tik per funkcijas

    public function __construct(){
        echo 'Hello Afrika' . '<br/>';
    }

    public function padainuok(){
        echo 'La la la! <br/>';
    }
}