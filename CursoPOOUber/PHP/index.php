<?php
require_once('car.php');
require_once('uberX.php');
require_once('uberPool.php');
require_once('uberVan.php');
require_once('account.php');

$uberX = new UberX("JSP123", new Account("Stiven Pulido", "1014987654", "stiven.pulido@correo.com", "098345"), "Renault", "Twingo");
$uberX->setPassenger(4);
$uberX->PrintDataCar();

$uberPol = new UberX("ASP764", new Account("Juan Saenz", "1022098123", "juan.saenx@correo.com", "875235"), "Ford", "fiesta Titanium");
$uberPol->PrintDataCar();

$uberVan = new UberVan("KLJ765", new Account("Andres Ovalle", "1022987543", "andres.ovalle@correo.com", "1234567"), "BMW", " Cuero");
$uberVan->setPassenger(6);
$uberVan->PrintDataCar();
?>
<!-- php -S localhost:8080 index.php (esto es para arrancar en terminal wsl2)-->