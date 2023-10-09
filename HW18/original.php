<?php

//аналіз коду https://github.com/tayyabmughal676/PHPTutorials/blob/master/Index.php відповідно до PSR-12

class House { //перенести фігурну дужку на окремий рядок
    private $color;
    private $allowedColors = [
        'black', 'blue', 'red', 'green'
    ];
    public function setColor($color) { //перенести фігурну дужку на окремий рядок
        $color = strtolower($color);
        if ( in_array( $color, $this -> allowedColors ) ) { //прибрати пробіли перед та після круглих дужок та навколо "->"
            $this -> color = $color; // прибрати пробіли навколо "->" та прибрати пустий рядок перед фігурною дужкою

        }
    }
    public function getColor() { //перенести фігурну дужку на окремий рядок
        if ($this -> color) { // прибрати пробіли навколо "->"
            return $this -> color; // прибрати пробіли навколо "->"
        } else {
            return 'No color is set. May be you have set a color which is not allowed';
        }
    }
}

$house1 = new House();
$house1 -> setColor('black'); // прибрати пробіли навколо "->"
echo $house1 -> getColor(); // прибрати пробіли навколо "->"

echo '<br>';

$house2 = new House();
$house2 -> setColor('yellow'); // прибрати пробіли навколо "->"
echo $house2 -> getColor(); // прибрати пробіли навколо "->"