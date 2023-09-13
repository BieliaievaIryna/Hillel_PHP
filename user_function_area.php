<?php

// version 1

/***
 * @param int|float $radius1
 * @return float
 */
function circleArea1 (int|float $radius1): float {
    $area = M_PI * ($radius1 ** 2);
    return round($area, 2);
}

$result = circleArea1(15);
echo "The area of the circle is $result square meters." . PHP_EOL;

// version 2
// ask the user to enter a radius value

echo "Enter the radius of the circle:" . PHP_EOL;
$radius2 = (int) fgets(STDIN);

function circleArea2 (int|float &$radius2): float {
    $area = M_PI * ($radius2 ** 2);
    return round($area, 2);
}

$result = circleArea2($radius2);
echo "The area of the circle is $result square meters." . PHP_EOL;