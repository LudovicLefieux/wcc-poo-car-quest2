<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];

    private string $energy = 'fuel';

    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function start(): string 
    {
        $sentence = '';

        while ($this->currentSpeed < 15) {
            $this->currentSpeed++;
            $sentence .= "Faster !";
        }

        $sentence .= 'I have enough speed';
        return $sentence;
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

    public function setEnergyLevel(): void 
    {
        $this->energyLevel = $energyLevel;
    }
}