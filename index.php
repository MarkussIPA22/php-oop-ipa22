<?php
include "Dog.php";
include "Cat.php";
$myDog = new Dog;
 $myDog2 = new Dog;

//  $myCat = new Cat;
//  $myCat2 = new Cat;
//  $myCat3 = new Cat;

$cats = [];
 
 $myDog->color = "Black";
 echo $myDog ->color;
 echo $myDog2->color;

for ($i=0; $i < 21; $i++) { 
    array_push($cats, new Cat);
    
}

?>