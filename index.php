<?php

include "Tire.php";
include "Car.php";
include "Train.php";
include "Dog.php";
include "Cat.php";

/*$Bird1 = new Bird("skoda", 14);
echo $Bird1->name . "<br>";

$Bird2 = new Bird("gaz", 12);
echo $Bird2->name . "<br>";

$Bird3 = new Bird("kaija", 16);
echo $Bird3->name . "<br>";

$Car1 = new Car("golf", 147543);
//echo $Car1->name . "<br>";

$Car2 = new Car("volvo", 16);

$Car2->increaseMileage(240);
echo "<br>";
*/
$Tire1 = new Tire (133, "Summer", "like new");
echo $Tire1->size . "<br>";
echo $Tire1->type . "<br>";

$Car1 = new Car("BMW", "0.01");
echo Car::$describe;
Car::makeNoise();

$Cat1 = new Cat (Janis);

//$Bird2->fly();
//$Bird3->fly();