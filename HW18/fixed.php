<?php

class House
{
    private string $color;
    private array $allowedColors = [
        'black', 'blue', 'red', 'green'
    ];

    /**
     * @param string $color
     * @return void
     */
    public function setColor(string $color): void
    {
        $color = strtolower($color);
        if (in_array($color, $this->allowedColors)) {
            $this->color = $color;
        }
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        if ($this->color) {
            return $this->color;
        } else {
            return 'No color is set. May be you have set a color which is not allowed';
        }
    }
}

$house1 = new House();
$house1->setColor('black');
echo $house1->getColor();

echo '<br>';

$house2 = new House();
$house2->setColor('yellow');
echo $house2->getColor();