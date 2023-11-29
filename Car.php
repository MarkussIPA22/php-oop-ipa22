<?php

class Car {
    public $brand;
    private $mileage;
    static $describe = "i am mostly made out of metal and i think i am albanian and harijs thinks hes from pskov but he hasnt even been to russian once in his life but he is a big retard  lol lol lol lol l ol o lajkadjadajidsahosaghidsagasghidahdash";
    

    public function __construct($n, $a) {
        $this->brand = $n;
        $this->mileage = $a;
    }

    public function __destruct() {
        echo $this->brand . "  " . $this->mileage;
    }

    public function increaseMileage($amount) {
        $this->mileage = $this->mileage+$amount;
    }
    static function makeNoise() {
        echo "BEEP , BEEP" . "<br>";
    }
    
}
