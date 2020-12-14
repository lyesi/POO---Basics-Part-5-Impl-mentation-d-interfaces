<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private $storageCapacity;
    private $storageCargo;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    public function setStorageCargo(int $storageCargo): void
    {
        if($storageCargo >= 0){
            $this->storageCargo = $storageCargo;
        }
    }

    public function getStorageCargo(): string
    {
        if ($this->storageCargo < $this->storageCapacity) {
            return "In filling";
        }
        else {
            return "Full";
        }
    }
}