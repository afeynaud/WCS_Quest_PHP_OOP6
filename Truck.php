<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;
    private int $energyLevel = 20;
    private int $storageCapacity = 50;
    private int $storageTotal = 0;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function getStorageCapacity(): Int
    {
        return $this->storageCapacity;
    }

    public function getStorageTotal(): Int
    {
        $this->storageTotal = 0;
        return $this->storageTotal;
    }

    public function getIsStorageFull(): String
    {
        if ($this->storageTotal === $this->storageCapacity) {
            return 'Storage is full';
        } else {
            return 'Storage is filling';
        }
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

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}