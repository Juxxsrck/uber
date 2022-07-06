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

    // public function PrintDataCar(){
    //     echo "\nLicense: $this->license,
    //     Conductor: {$this->driver->name},
    //     Document: {$this->driver->document}";
    // }

    public function printDataCar() {
        echo "
            Licencia: $this->license 
            Driver: {$this->driver->name} 
            Número de pasajeros: $this->passenger
            
        ";
    }

    public function getPassenger (){
        return $this->passenger;
    }

    public function setPassenger($passenger){
        if ($passenger == 4){
            $this->passenger = $passenger;
        }else{
            echo "Necesitas asignar 4 pasajeros";
        }
    }
}
?>