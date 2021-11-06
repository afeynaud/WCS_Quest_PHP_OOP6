<?php
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public int $nbLane = 2;
    public int $maxSpeed = 50;

    public function addVehicle(Vehicle $vehicle)
    {
        return 'This vehicle can run here.';
    }
}