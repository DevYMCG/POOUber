<?php
class Car{

    public $id = integer;
    public $license = string;
    public $document = string;
    public $driver = string;
    public $passengers = string;

    public function __construct(license, driver){

        $this->license = $license;
        $this->driver = $driver;

    }
}