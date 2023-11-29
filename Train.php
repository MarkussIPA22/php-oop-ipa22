<?php
 class Train {
   public  $brand;
   public $trackGauge;
   private $milage;

   public function __construct($b, $t, $m) {
    $this->brand = $b;
    $this->trackGauge = $t;
    $this->mileage = $m;
}

public function __destruct() {
    echo $this->brand . "dead at" . $this->mileage;
}

public function increaseMileage($amount) {
    $this->mileage = $this->mileage+$amount;
} 

 }