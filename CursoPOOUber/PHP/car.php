<?php
class Car{
    public $id = integer;
    public $license = string;
    public $driver = string;
    public $passenger = integer;

    public function __construct($license, $driver){
        $this->license = $license;
        $this->driver = $driver;
    }

    public function PrintDataCar(){
        echo "\nLicense: $this->license,
        Conductor: {$this->driver->name},
        Document: {$this->driver->document}";
    }
}
?>