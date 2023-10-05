<?php

trait DeliveryWeight
{
    public float $weight;

    /**
     * @param float $weight
     * @throws Exception
     */
    public function __construct(float $weight)
    {
        $this->setWeight($weight);
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     * @return void
     * @throws Exception
     */
    public function setWeight(float $weight): void
    {
        $this->checkWeight($weight);
        $this->weight = $weight;
    }

    /**
     * @param float $weight
     * @return void
     * @throws Exception
     */
    public function checkWeight(float $weight): void
    {
        if ($weight <= 0) {
            throw new Exception('The weight of the parcel must be greater than 0!' . PHP_EOL);
        }
        if ($weight >= 50) {
            throw new Exception('Parcels weighing more than 50 kg are not accepted!' . PHP_EOL);
        }
    }
}