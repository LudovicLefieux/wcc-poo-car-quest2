<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bike = new Bicycle('blue', 1);

var_dump($bike);

// Moving bike

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// Moving car pink

$carPink = new Car('pink', 4, 'fuel');
var_dump($carPink);

echo '<br> Car\'s speed: ' . $carPink->getCurrentSpeed() . ' km/h' . '<br>';
echo $carPink->start();
echo '<br> Car\'s speed: ' . $carPink->getCurrentSpeed() . ' km/h' . '<br>';
echo $carPink->forward();
echo '<br> Car\'s speed: ' . $carPink->getCurrentSpeed() . ' km/h' . '<br>';
echo $carPink->brake();
echo '<br> Car\'s speed: ' . $carPink->getCurrentSpeed() . ' km/h' . '<br>';
echo $carPink->brake();

// Moving truck green

$truckGreen = new Truck('green', 2, 'fuel', 100, 50);
var_dump($truckGreen);

echo '<br> Truck\'s loading: ' . $truckGreen->isStorageFull() . '<br>';

echo '<br> Truck\'s speed: ' . $truckGreen->getCurrentSpeed() . ' km/h' . '<br>';
echo $truckGreen->start();
echo '<br> Truck\'s speed: ' . $truckGreen->getCurrentSpeed() . ' km/h' . '<br>';
echo $truckGreen->forward();
echo '<br> Truck\'s speed: ' . $truckGreen->getCurrentSpeed() . ' km/h' . '<br>';
echo $truckGreen->brake();
echo '<br> Truck\'s speed: ' . $truckGreen->getCurrentSpeed() . ' km/h' . '<br>';
echo $truckGreen->brake();

// Moving truck green

$truckLightblue = new Truck('lightblue', 4, 'electric', 100, 100);
var_dump($truckLightblue);

echo '<br> Truck\'s loading: ' . $truckLightblue->isStorageFull() . '<br>';

echo '<br> Truck\'s speed: ' . $truckLightblue->getCurrentSpeed() . ' km/h' . '<br>';
echo $truckLightblue->start();
echo '<br> Truck\'s speed: ' . $truckLightblue->getCurrentSpeed() . ' km/h' . '<br>';
echo $truckLightblue->forward();
echo '<br> Truck\'s speed: ' . $truckLightblue->getCurrentSpeed() . ' km/h' . '<br>';
echo $truckLightblue->brake();
echo '<br> Truck\'s speed: ' . $truckLightblue->getCurrentSpeed() . ' km/h' . '<br>';
echo $truckLightblue->brake();