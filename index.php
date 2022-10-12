<?php

require_once 'Truck.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Motorway.php';
require_once 'Skateboard.php';
require_once 'Pedestrianway.php';
require_once 'Residentialway.php';



$bicycle1 = new Bicycle('blue', 1);
$bicycle2 = new Bicycle('green', 1);

$skate1 = new Skateboard('yellow', 1);
$skate2 = new Skateboard('red', 1);


$car1 = new Car('green', 4, 'electric');
$car2 = new Car('black', 4, 'fuel');

$camion1= new Truck('red', 3, 'fuel', 20);
$camion2= new Truck('red', 3, 'electric', 20);



$motorway= new Motorway;
$pedestrianway= new Pedestrianway;
$residentialway= new Residentialnway;


echo $motorway->addVehicle($camion1);
echo $motorway->addVehicle($skate1);
echo $motorway->addVehicle($car1);
echo "<br>";

echo $residentialway->addVehicle($skate1);
echo $residentialway->addVehicle($skate2);
echo $residentialway->addVehicle($bicycle1);
echo $residentialway->addVehicle($car1);
echo "<br>";

echo $pedestrianway->addVehicle($camion1);
echo $pedestrianway->addVehicle($car2);
echo $pedestrianway->addVehicle($skate2);
echo $pedestrianway->addVehicle($bicycle1);
echo "<br>";

var_dump($residentialway);
var_dump($motorway);
var_dump($pedestrianway);