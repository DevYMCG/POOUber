<?php

/*
    Para recorrer php debemos posicionarnos sobre 
    la carpeta donde este el archivo y ejecutar el 
    comando php -S localhost:8000
*/
require_once('Car.php');
require_once('Account.php');
require_once('UberX.php');
require_once('UberPool.php');
require_once('User.php');
require_once('Driver.php');

/*$car = new Car("AW456", new Account("Andres Herrera", "AMS123"));
$car->printDataCar();*/

$uberx = new UberX("MATY56", new Account("Pepe Aguilar", "PAPYU12"), "Chevrolet", "Spark");
$uberx->printDataCar();

$uberpoll = new UberPool("MATY56", new Account("Andry Becerra", "YHNYU12"), "Eco Sport", "");
$uberpoll->printDataCar();

$user = new User("Rosa Valero", "76543JKO");
$user->PrintDataAccount();

$driver = new Driver("Daniela alvarado", "DANI876");
$driver->PrintDataAccount();