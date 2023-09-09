<?php

// CREATE ARRAY WITH RANDOM VALUES

$randomArray = [];
$length = 25;
$min = 0;
$max = 100;

for ($i = 0; $i < $length; $i++) {
    $randomArray[$i] = rand($min, $max);
}

print_r($randomArray);

// FIND MAX AND MIN VALUE
// use PHP loops

$maxValue = $randomArray[0];
$minValue = $randomArray[0];

foreach ($randomArray as $key => $value) {
    if ($value > $maxValue) {
        $maxValue = $value;
    }
}

foreach ($randomArray as $key => $value) {
    if ($value < $minValue) {
        $minValue = $value;
    }
}

print_r("minValue: " . $minValue . PHP_EOL);
print_r("maxValue: " . $maxValue . PHP_EOL);

// use PHP functions

$minValue = min($randomArray);
$maxValue = max($randomArray);

print_r("minValue: " . $minValue . PHP_EOL);
print_r("maxValue: " . $maxValue . PHP_EOL);

// SORT ARRAY
//use PHP function

sort($randomArray);

print_r($randomArray);

// use PHP loops (Bubble sort)

$count = count($randomArray);

for ($i = 0; $i < $count; $i++) {
    for ($j = 0; $j < $count - $i - 1; $j++) {
        if($randomArray[$j] > $randomArray[$j + 1]){
            $tempValue = $randomArray[$j + 1];
            $randomArray[$j + 1] = $randomArray[$j];
            $randomArray[$j] = $tempValue;
        }
    }
}

print_r($randomArray);