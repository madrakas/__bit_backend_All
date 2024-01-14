<?php declare(strict_types=1);

class KibirasNePo1 extends Kibiras3{
    
    public function prideti1Akmeni(){
        $this->akmenuKiekis += rand(2, 5);
        // echo 'aaaaa!';
    }
}