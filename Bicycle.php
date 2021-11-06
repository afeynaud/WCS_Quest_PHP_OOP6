<?php
require_once 'Vehicle.php';

class Bicycle extends Vehicle implements LightableInterface
{
    private bool $hasLuggageRack = true;

    public function getHasLuggageRack(): bool
    {
        return $this->hasLuggageRack;
    }

    public function switchOn(): bool
    {
        if ($this->currentSpeed > 10) {
            return true;
        }
        return false;
    }

    public function switchOff(): bool
    {
        return false;
    }
}