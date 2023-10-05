<?php

require_once 'DeliveryWeight.php';

class DeliveryInternational
{
    use DeliveryWeight;

    static float $costPerKilo = 200;

    /**
     * @return float
     */
    public function calculateCost(): float
    {
        $costParcel = $this->getWeight() * self::$costPerKilo;
        if ($costParcel > 4000) {
            $fee = 420;
            return $costParcel + $fee;
        } elseif ($costParcel > 2000) {
            $fee = 250;
            return $costParcel + $fee;
        } else {
            return $costParcel;
        }
    }

    /**
     * @return string
     */
    public function printCost(): string
    {
        return "Sending a parcel abroad weighing {$this->getWeight()} kg costs {$this->calculateCost()} hryvnias.\n";
    }
}