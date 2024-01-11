<?php 

class Krokodilas extends ManoAfrika {

    public $pavadinimas = 'Krokodilas';
    public $spalva = 'žalias';
    public $svoris = 'nezinomas';  // dar nepasverem
    public $socialinisTinklas = 'TikTok';

    public function __construct(){
        parent::__construct();  // paleis abu konstruktorius
        echo 'Hello Krokodilas' . '<br/>';
    }
    
    public function padainuok(){
        echo 'Crocodile shoooooeeees!....<br/>';
        parent::padainuok();
    }
    // public $zemynas = 'Afrika';
}