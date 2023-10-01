<?php

abstract class Figure
{

    public abstract function area (): float;

    public abstract function perimeter (): float;

    /**
     * @param float $value
     * @return void
     * @throws Exception
     */
    protected function checkValue (float $value): void
    {
        if ($value <= 0) {
            throw new Exception("The value must be greater than zero!" . PHP_EOL);
        }
    }

    public abstract function displayUsedValues ();

    /**
     * @return void
     */
    public function displayArea(): void
    {
        echo "Area of the figure: {$this->area()}" . PHP_EOL;
    }

    /**
     * @return void
     */
    public function displayPerimeter(): void
    {
        echo "Perimeter of the figure: {$this->perimeter()}" . PHP_EOL;
    }
}