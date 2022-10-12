<?php

require_once 'Highway.php';
final class Motorway {
    private array $currentVehicles = [];
    private int $nbLane = 4;
    private int $maxSpeed = 130;

    public function __costruct (int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle(Vehicle $vehicle):string
    {
            if (($vehicle instanceof Truck === true) || ($vehicle instanceof Car === true)){
            $this->currentVehicles[] = $vehicle;
            $string = "Vehicle added<br>";
            }else {
                $string = "Vehicle not allowed<br>";
            }
            return $string;
    }

}