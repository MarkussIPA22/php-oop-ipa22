<?php

class Car {
    public $brand;
    private $milage;

    public function __construct($b,$m) {
        $this->brand = $b;
        $this->milage = $m;
    }

   
    public function __destruct(){
        echo $this->brand . "is dead at " $this->milage ;
    }
    public function increaseMileage ($amount) {
        $this->milage = $amount;

    }

}