<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public int $nbLane = 1;
    public int $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            return 'This vehicle can run here.';
        } else {
            return 'This vehicle cannot run here.';
        }
    }
}