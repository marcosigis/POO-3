<?php
require_once 'Vehicle.php';

class Truck extends Vehicle {
    
public const ALLOWED_ENERGIES = ['fuel', 'electric'];
private int $capacity;
private int $loading = 0;

    public function __construct(string $color, int $nbSeats, private string $energy, int $capacity){
    parent::__construct($color, $nbSeats);
    $this->setEnergy($energy);
    $this->capacity=$capacity;

    }

public function getCapacity(): int
{
return $this->capacity;
}

public function setCapacity(int $capacity): void
{
$this->capacity = $capacity;

}

public function load(): string
{
    $sentence = "";
    while ($this->capacity > $this->loading){
        $this->loading++;
        $sentence .= "I'm loading, ";
    }
    $sentence .= "I'm full. ";
    return $sentence;
}

public function getEnergy(): string
{
return $this->energy;
}

public function setEnergy(string $energy): Truck
{
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    }
    return $this;
}

public function getEnergyLevel(): int
{
return $this->energyLevel;
}

public function setEnergyLevel(int $energyLevel) : void
{
$this->energyLevel = $energyLevel;
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

}