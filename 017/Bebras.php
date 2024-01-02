<?php
class Bebras {
    public $spalva = 'ruda';
    private $svoris = 'nezinomas';
    private $ugis = '1.5';
    
    // public function __get($prop){
    //     if ($prop === 'svoris'){
    //         return $this->svoris . 'kg';
    //     }
    // }

    public function __get($prop){

        return match($prop){
            'ugis' => $this->ugis,
            'svoris' => $this->ugis,
            'uodega' => $this->goKaramba(),
            default => null
        };
    }

    private function goKaramba(){
        return 'uodega: ' . rand(20, 30) . 'cm';
    }

    // Getter methods
    public function koksSvoris(){
        return  $this->svoris;
    }

    // Setter methods
    public function duotiMaisto($kg){
        if ($kg > 1) {
            echo 'per daug';
            return;
        }
        if ($kg < 0.1) {
            echo 'per mažai';
            return;
        }
        if ($kg + $this->svoris > 45){
            echo 'bebras per storas';
            return;
        }
        $this->svoris = $this.svoris + $kg;
    }

    public function pasverti() {
        $this->svoris = rand(5, 45);
    }
}