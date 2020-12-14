<?php

abstract class HighWay
{
    private array $currentVehicles;
    private int  $nbLane;
    private int $maxSpeed;

    abstract public function addVehicle(Vehicle $vehicle);

    // Setters
    public function setCurrentVehicles(array $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    // Getters
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

}