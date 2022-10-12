<?php

require_once 'Highway.php';
final class Residentialnway {
    private array $currentVehicles = [];
    private int $nbLane = 2;
    private int $maxSpeed = 50;

    public function __costruct (int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle(Vehicle $vehicle):string
    {
            $this->currentVehicles[] = $vehicle;
            $string = "Vehicle added<br>";
            return $string;
    }

}