<?php

// FUNCTION WITH &

$number = 4;
/***
 * @param int|float $number
 * @return int|float
 */
function power_1 (int|float &$number): int|float {
    return pow($number, 2);
};
print_r(power_1($number) . PHP_EOL);

// Arrow Function

$number = 6;
$power_1 = fn ($number) => pow($number, 2);
print_r($power_1($number) . PHP_EOL);

// FUNCTION WITHOUT &

/***
 * @param int|float $number
 * @return int|float
 */
function power_2 (int|float $number): int|float {
    return pow($number, 2);
};
print_r(power_2(4) . PHP_EOL);

// Arrow Function

$power_2 = fn ($number) => pow($number, 2);
print_r($power_2(6) . PHP_EOL);
