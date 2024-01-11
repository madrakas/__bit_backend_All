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

    public function __set($prop, $val){
        if ($prop === 'ugis') {
            if ($val < 0.8 || $val > 1.0) {
                echo 'Blogai įvestas ūgis';
                return;
            }
            $this->ugis = $val;
        }
    }

    public function __construct(){
        echo 'bebras atėjo<br/>';
    }

    public function __destruct(){
        echo 'bebras išėjo<br/>';
    }

    public function __serialize() : array {
        return [
            'ugis' => $this->ugis,
            'svoris' => $this->svoris,
        ];
    }

    public function __unserialize(array $data) : void {
               $this->ugis =  $data['ugis'] * 2;
               $this->svoris =  $data['svoris'];
    }

    public function __toString(): string {
        return "<br/>Bebras  spalva: $this->spalva,  ugis: $this->ugis, svoris: $this->svoris <br/>";
    }

    public function __invoke(){
        echo '<br>Bebras sako:<br/>';
        echo 'Labas<br/>';
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