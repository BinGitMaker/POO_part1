<?php

require_once './src/Car.php';

$car = new Car("purple", 5, "essence");
$car1 = new Car("orange", 7, "diesel");


echo $car->start();
echo $car->forward();
echo $car->brake();

/* echo $car1->getColor(); */