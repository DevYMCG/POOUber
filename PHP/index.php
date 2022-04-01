<?php

require_once('Car.php');
require_once('Account.php');
require_once('UberX.php');
require_once('UberPool.php');

/*$car = new Car("AW456", new Account("Andres Herrera", "AMS123"));
$car->printDataCar();*/

$uberx = new UberX("MATY56", new Account("Pepe Aguilar", "PAPYU12"), "Chevrolet", "Spark");
$uberx->printDataCar();

$uberpoll = new UberPool("MATY56", new Account("Andry Becerra", "YHNYU12"), "Eco Sport", "");
$uberpoll->printDataCar();
