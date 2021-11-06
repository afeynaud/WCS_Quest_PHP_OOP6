<?php

class Speedometer
{
    public const MILES_KILOMETERS_CONVERSION = 1.609;

    public static function convertKmToMiles(int $kilometers): Int {
        return $kilometers / self::MILES_KILOMETERS_CONVERSION;
    }
    public static function convertMilesToKm(int $miles): Int {
        return $miles * self::MILES_KILOMETERS_CONVERSION;
    }
}