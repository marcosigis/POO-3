<?php

abstract class Vehicle {
    protected string $color;
    protected int $currentSpeed;
    protected int $nbSeats;
    protected int $nbWheels;

    public function __construct (string $color, int $nbSeats){
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    public function forward(): string
    {  
        $this->currentSpeed = 20;
        return "You accellerated and started moving. <br>";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "brake! ";
        }
        $sentence .= "i'm stopped! ";
        return $sentence;
    }

    public function getColor():string
    {
        return $this->color;
    }

    public function setColor(string $color):void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed():int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed) : void
    {
        if($currentSpeed > 0) {
            $this->currentSpeed = $currentSpeed;
            }
    }

    public function getNbSeats() : int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats) : void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels) : void
    {
        $this->nbWheels = $nbWheels;
    }
}