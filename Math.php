<?php

class Math  {
static function addTwo($a, $b) {
    return $a+$b;
}
static function factorial($a) {
    $factorial =1;
    for($i = $a; $i>= 1; $i--) {
        $factorial = $factorial *$i;
    }
    echo "Faktrials no $a ir $factorial <br>";
}
static function sum($array) {

$sum = 0;
foreach($array as $i) {
    $sum = $sum + $i;
}
return $sum;
}
static function average($av) {
return array_sum($av)/count($av);
}


static function max($maks) {
    return max($maks);

} 


}


