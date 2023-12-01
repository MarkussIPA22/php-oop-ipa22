<?php

abstract class Vehicle {
protected $milage;
public $brand;



public function __construct($n, $a) {
    $this->brand = $n;
    $this->mileage = $a;
}
public function __destruct() {
    echo $this->brand . "dead at"  . $this->mileage;
}
public function increaseMileage($amount) {
    $this->mileage = $this->mileage+$amount;

}
}