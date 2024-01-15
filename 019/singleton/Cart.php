<?php

class Cart{

    private static $cartObject;

    // public static function getCart($number){
    //     return new self($number);
    // }
    
    // private function __construct($number){
    //     $this->number = $number;
    // }

    public static function getCart(){
        return self::$cartObject ?? self::$cartObject =new self;
    }
    
    private function __construct(){
        // ...
    }

    private function __clone(){
        //  ...
    }

    // private function __serialize(){   // nenaudotinas nes serializuojam dėdami į  DB
    //     // ...
    // }
}