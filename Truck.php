<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];

    private string $energy = 'fuel';

    private int $storageCapacity;

    private int $loading = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity, int $loading)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;
        $this->loading = $loading;
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

    public function setEnergyLevel(): void 
    {
        $this->energyLevel = $energyLevel;
    }

    public function getStorageCapacity(): int 
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(): void 
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getLoading(): int 
    {
        return $this->loading;
    }

    public function setLoading(): void 
    {
        $this->loading = $loading;
    }

    public function isStorageFull(): string
    {
        if ($this->storageCapacity > $this->loading) {
            return 'in filling';
        } else {
            return 'full';
        }
    }
}