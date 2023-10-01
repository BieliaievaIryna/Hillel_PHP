<?php

class Rectangle extends Figure
{
    private float $length;

    private float $width;

    /**
     * @param float $length
     * @param float $width
     * @throws Exception
     */
    public function __construct (float $length, float $width)
    {
        $this->setLength($length);
        $this->setWidth($width);
    }

    /**
     * @return float
     */
    public function area(): float
    {
        return round($this->getLength() * $this->getWidth(), 2);
    }

    /**
     * @return float
     */
    public function perimeter(): float
    {
        return round(2 * ($this->getLength() + $this->getWidth()), 2);
    }

    /**
     * @return float
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * @param float $length
     * @return void
     * @throws Exception
     */
    public function setLength(float $length): void
    {
        $this->checkValue($length);
        $this->length = $length;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @param float $width
     * @return void
     * @throws Exception
     */
    public function setWidth(float $width): void
    {
        $this->checkValue($width);
        $this->width = $width;
    }

    public function displayUsedValues (): void
    {
        echo "Rectangle. Width: {$this->getWidth()}. Length: {$this->getLength()}" . PHP_EOL;
    }

}