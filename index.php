<?php

require_once 'Bicycle.php';
require_once 'Car.php';


/* ------------ BICYCLE ----------*/

$bicycle = new Bicycle('bleue'.'<br>');
/* var_dump($bicycle); >> affiche le array */
echo '<br> le velo est de couleur ' . $bicycle->getColor() . '<br>';


// Moving bicycle >> utilise les methodes
echo $bicycle->forward();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake() . '<br>';



/* ON PEUT RE-INSTENCIER UNE NOUVELLE current speed apres */

/* ------------ CAR ----------*/

/* - CAR1 -*/
$car = new Car('purple ', 4, 'fuel.' . '<br>');

/* var_dump($car); */
echo '<br> la voiture est de couleur ' . $car->getColor() . 'avec '. $car->getNbSeats() . ' places, et elle roule au ' . $car->getEnergy();

/* - CAR2 -*/
$car1 = new Car('orange ', 7, 'hybrid.' .'<br>');

echo '<br> la voiture est de couleur ' . $car1->getColor() . 'avec '. $car1->getNbSeats() . ' places, et elle roule au ' . $car1->getEnergy();

// Moving car >> utilise les methodes
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();

