<?php
include_once "Vehicle.php";
 class Train extends Vehicle {
   
   public $trackGauge;
   

   public function __construct($b, $t, $m) {
   parent::__construct($b,$m);
    $this->trackGauge = $t;
   
}

static function makeNoise() {
    echo "VIVI VIVI";
}


 }