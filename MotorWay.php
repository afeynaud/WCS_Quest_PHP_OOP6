<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public int $nbLane = 4;
    public int $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car) {
            return 'This vehicle can run here.';
        } else {
            return 'This vehicle cannot run here.';
        }
    }
}