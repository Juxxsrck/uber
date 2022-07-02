<?php
require_once('car.php');
require_once('uberX.php');
require_once('uberPool.php');
require_once('account.php');

$uberX = new UberX("JSP123", new Account("Stiven Pulido", "1014987654"), "Renault", "Twingo");
$uberX->PrintDataCar();

$uberPol = new UberX("ASP764", new Account("Juan Saenz", "1022098123"), "Ford", "fiesta Titanium");
$uberPol->PrintDataCar();
?>
<!-- php -S localhost:8080 index.php (esto es para arrancar en terminal wsl2)-->