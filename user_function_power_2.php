<?php

// FUNCTION WITH &

$number = 4;
$exponent = 2;
/***
 * @param int|float $number
 * @param int|float $exponent
 * @return void
 */
function power_1 (int|float &$number, int|float &$exponent): void {
    echo pow($number, $exponent) . PHP_EOL;
};
power_1($number, $exponent);

// FUNCTION WITHOUT &

/***
 * @param int|float $number
 * @param int|float $exponent
 * @return int|float
 */
function power_2 (int|float $number, int|float $exponent): int|float {
    return pow($number, $exponent);
};
print_r(power_2(4, 2) . PHP_EOL);

// Arrow Function

$power_2 = fn ($number, $exponent) => pow($number, $exponent);
print_r($power_2(6, 2) . PHP_EOL);
