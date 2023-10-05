<?php

require_once 'DeliveryWeight.php';

class DeliveryByCountry
{
    use DeliveryWeight;

    static float $costPerKilo = 150;

    /**
     * @return float
     */
    public function calculateCost(): float
    {
        return $this->getWeight() * self::$costPerKilo;
    }

    /**
     * @return string
     */
    public function printCost(): string
    {
        return "Sending a parcel weighing {$this->getWeight()} kg across the country costs {$this->calculateCost()} hryvnias.\n";
    }
}