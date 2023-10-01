<?php

class Circle extends Figure
{
    private float $radius;

    /**
     * @param float $radius
     * @throws Exception
     */
    public function __construct (float $radius)
    {
        $this->setRadius($radius);
    }

    /**
     * @return float
     */
    public function area(): float
    {
        return round(pi() * ($this->getRadius() ** 2), 2);
    }

    /**
     * @return float
     */
    public function perimeter(): float
    {
        return round(2 * pi() * $this->getRadius(), 2);
    }

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @param float $radius
     * @return void
     * @throws Exception
     */
    public function setRadius(float $radius): void
    {
        $this->checkValue($radius);
        $this->radius = $radius;
    }

    public function displayUsedValues (): void
    {
        echo "Circle. Radius: {$this->getRadius()}" . PHP_EOL;
    }
}