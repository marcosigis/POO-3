<?php

require_once 'Highway.php';
final class Pedestrianway {
    private array $currentVehicles = [];
    private int $nbLane = 1;
    private int $maxSpeed = 10;

    public function __costruct (int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle(Vehicle $vehicle):string
    {
            if (($vehicle instanceof Bicycle === true) || ($vehicle instanceof Skateboard === true)){
            $this->currentVehicles[] = $vehicle;
            $string = "Vehicle added<br>";
            }else {
                $string = "Vehicle not allowed<br>";
            }
            return $string;
    }

}