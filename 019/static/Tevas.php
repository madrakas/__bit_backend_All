<?php


class Tevas {

    static public $socialinisTinklas = 'Facebook';

    static public function kaSkrolinaTevukas() {

        echo 'Skrolinu t1 ' . self::$socialinisTinklas . '<br>';
        echo 'Skrolinu t2 ' . static::$socialinisTinklas . '<br>';

    }
}
