<?php

require_once ('Vehicle.php');

class Car extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private $energy;
    private $energyLevel;
    private $hasParkBrake = false;
    //false = 0;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function forward(): string
    {
        if ($this->hasParkBrake){
            throw new Exception('division by 0');
        }
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
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

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setParkBrake(bool $parkBrake): void
    {
        $this->hasParkBrake = $parkBrake;
    }
}
