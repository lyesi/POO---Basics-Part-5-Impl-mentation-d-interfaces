<?php

require_once 'Vehicle.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn(bool $switch): bool
    {
        if($currentSpeed > 10){
            $this->light = true;
            return $this->light;
        }
    }

    public function switchOff(bool $switch): bool
    {
        $this->switch = flase;
        return $this->light;
    }
}