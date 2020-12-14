<?php

require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
    parent::__construct($color, $nbSeats);
    $this->setEnergy($energy);
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

    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start(): string
    {
        if($this->hasParkBrake == true)
        {
            throw new Exception("Le frein a main est activé ");
        }
        return "Le frein à main est désactivé ";    
    }

    public function switchOn(): bool
    {
        $this->light = true;
        return $this->light;
    }

    public function switchOff(): bool
    {
        $this->light = flase;
        return $this->light;
    }
}