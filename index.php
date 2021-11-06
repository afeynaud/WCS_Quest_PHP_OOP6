<?php
require_once 'LightableInterface.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Speedometer.php';

$bartBike = new Bicycle('black', 1);
echo 'The Bart bike car is ' . $bartBike->getColor() . '. He got ' . $bartBike->getNbWheels() . ' wheels, ' . $bartBike->getNbSeats() . ' seats and have ' . $bartBike->getHasLuggageRack() . ' luggage rack.<br><br>';

echo $bartBike->forward();
echo '<br> Vitesse du vélo : ' . $bartBike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bartBike->brake();
echo '<br> Vitesse du vélo : ' . $bartBike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bartBike->brake();

$flandersGeoCar = new Car('purple', 4, 'electric');

echo '<br><br>The Flanders Geo car is ' . $flandersGeoCar->getColor() . '. She got ' . $flandersGeoCar->getNbWheels() . ' wheels, ' . $flandersGeoCar->getNbSeats() . ' seats, run with ' . $flandersGeoCar->getEnergy() . ' with a capacity of ' . $flandersGeoCar->getEnergyLevel() . ' liters.<br><br>';

echo $flandersGeoCar->start(false);
echo $flandersGeoCar->forward();
echo '<br> Vitesse de la voiture : ' . $flandersGeoCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $flandersGeoCar->brake();
echo '<br> Vitesse de la voiture : ' . $flandersGeoCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $flandersGeoCar->brake();

$mrPlowCar = new Car('red', 2, 'fuel');

echo '<br><br>The Mr. Plow car is ' . $mrPlowCar->getColor() . '. She got ' . $mrPlowCar->getNbWheels() . ' wheels, ' . $mrPlowCar->getNbSeats() . ' seats, run with ' . $mrPlowCar->getEnergy() . ' with a capacity of ' . $mrPlowCar->getEnergyLevel() . ' liters.';

$homerTruck = new Truck('red', 2, 'fuel');

echo '<br><br>The Homer truck is ' . $homerTruck->getColor() . '. He got ' . $homerTruck->getNbWheels() . ' wheels, ' . $homerTruck->getNbSeats() . ' seats, run with ' . $homerTruck->getEnergy() . ' with a capacity of ' . $homerTruck->getEnergyLevel() . ' liters.<br><br>';

echo $homerTruck->start(false);
echo $homerTruck->forward();
echo '<br> Vitesse du camion : ' . $homerTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $homerTruck->brake();
echo '<br> Vitesse du camion : ' . $homerTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $homerTruck->brake() . '<br><br>';

echo $homerTruck->getIsStorageFull();

$lennyTruck = new Truck('purple', 2, 'fuel');

echo '<br><br>The Lenny truck is ' . $lennyTruck->getColor() . '. He got ' . $lennyTruck->getNbWheels() . ' wheels, ' . $lennyTruck->getNbSeats() . ' seats, run with ' . $lennyTruck->getEnergy() . ' with a capacity of ' . $lennyTruck->getEnergyLevel() . ' liters.<br><br>';

$pedestrianWay = new PedestrianWay;
$residentialWay = new ResidentialWay;
$motorWay = new MotorWay;

$bartSkateboard = new Skateboard('red', 0);

echo 'Flanders Geo car on motor way : ' . $motorWay->addVehicle($flandersGeoCar) . '<br>';
echo 'Flanders Geo car on pedestrian way : ' . $pedestrianWay->addVehicle($flandersGeoCar) . '<br>';
echo 'Flanders Geo car on residential way : ' . $residentialWay->addVehicle($flandersGeoCar) . '<br><br>';

echo 'Bart skateboard on motor way : ' . $motorWay->addVehicle($bartSkateboard) . '<br>';
echo 'Bart skateboard on pedestrian way : ' . $pedestrianWay->addVehicle($bartSkateboard) . '<br>';
echo 'Bart skateboard on residential way : ' . $residentialWay->addVehicle($bartSkateboard) . '<br><br>';

try {
    $mrPlowCar->start(false);
} catch (Exception $e) {
    $mrPlowCar->setParkBrake(false);
}finally {
    echo 'Ma voiture roule comme un donut !' . '<br><br>';
}

echo '10 kilometers = ' . Speedometer::convertKmToMiles(10) . ' miles';