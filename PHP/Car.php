<?php

class Car{

    public $id;
    public $license;
    public $document;
    public $driver;
    protected $passenger;

    public function __construct($license, $driver){

        $this->license = $license;
        $this->driver = $driver;

    }

    public function PrintDataCar(){
        if($this->passenger!=null)
            echo "
                license: $this->license, 
                conductor: {$this->driver->name},  
                pasajeros: {$this->passenger}
                
                ";
    }

    public function getPassenger(){
        return $this->passenger;
    }
    
    public function setPassenger($passenger){

        if($passenger == 4){
            $this->passenger = $passenger;
        }else{
            echo "Necesitas asignar 4 pasajeros";
        }
    }


}