<?php

require_once 'DeliveryWeight.php';

class DeliveryByCity
{
    use DeliveryWeight;

    static float $costPerKilo = 100;

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
        return "Sending a parcel weighing {$this->getWeight()} kg through the city costs {$this->calculateCost()} hryvnias.\n";
    }
}