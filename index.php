<?php

//index.php

require_once 'Bicycle.php';
require_once 'Skateboard.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$doubleBR = '<br><br>';

// $bicycle = new Bicycle('blue', 1);
// echo $bicycle->forward();
// var_dump($bicycle);

// $car = new Car('green', 4, 'electric');
// echo $car->forward();
// var_dump($car);

//var_dump(Car::ALLOWED_ENERGIES);

// echo 'Bicycle time : <br>';
// $bicyle = new Bicycle('Rouge', 1);
// $bicyle->setCurrentSpeed(15);
// echo $bicyle->forward();
// echo $bicyle->brake();

// echo $doubleBR;

// echo 'Car time : <br>';
// $car = new Car('Bleue', 30, 'Diesel');
// $car->getCurrentSpeed(10);
// echo $car->forward();
// echo $car->brake();

// echo $doubleBR;

// echo 'Truck time : <br>';
// $truck = new Truck('Vert', 3, 'Diesel', 30);
// echo $truck->forward();
// echo $truck->brake();
// echo '<br>';
// echo $truck->getStorageCargo(40);

// $motorWay = new MotorWay();
// $motorWay->setNbLane(4);
// $motorWay->setMaxSpeed(130);
// $motorWay->addVehicle(new Car('Bleu', '4', 'Diesel')); // La voiture s'affiche dans le tableau
// $motorWay->addVehicle(new Bicycle('Cyan', 1)); // Le vélo ne s'affiche pas dans le tableau
// var_dump($motorWay);

// $pedestrianWay = new PedestrianWay();
// $pedestrianWay->setNbLane(1);
// $pedestrianWay->setMaxSpeed(10);
// $pedestrianWay->addVehicle(new Car('Bleu', '4', 'Diesel')); // La voiture ne s'affiche pas dans le tableau
// $pedestrianWay->addVehicle(new Bicycle('Cyan', 1)); // Ici le vélo s'affiche dans le tableau
// $pedestrianWay->addVehicle(new Skateboard('Black', 1)); // Le skateboard s'affiche bien dans le tableau
// var_dump($pedestrianWay);

// $residentialWay = new ResidentialWay();
// $residentialWay->setNbLane(2);
// $residentialWay->setMaxSpeed(50);
// $residentialWay->addVehicle(new Car('Bleu', '4', 'Diesel'));
// $residentialWay->addVehicle(new Bicycle('Cyan', 1));
// $residentialWay->addVehicle(new Skateboard('Black', 1));
// var_dump($residentialWay); // Ici tous les véhicules s'affichent


//POO 3
$car = new Car('Orange', '8', 'Diesel');
$car->setParkbrake(true);
try{
    echo $car->start();
 } catch(Exception $e){
    echo "Exception received  : ". $e->getMessage() . '<br>';
    $car->setParkBrake(true);
 } finally{
    echo "Ma voiture roule comme un donut";
}
