<?php
require_once('Car.php');
require_once('Account.php');

$car = new Car("JSP123", new Account("Stiven Pulido", "1014987654"));
$car->PrintDataCar