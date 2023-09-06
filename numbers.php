<?php

echo "Enter the first number:" . PHP_EOL;
$firstInt = (int) fgets(STDIN);

echo "Enter the second number:" . PHP_EOL;
$secondInt = (int) fgets(STDIN);

echo "Enter the third number:" . PHP_EOL;
$thirdInt = (int) fgets(STDIN);

$sum = $firstInt + $secondInt + $thirdInt;
echo "Sum of entered numbers: $sum" . PHP_EOL;

$average = round($sum / 3, 1);
echo "Average of entered numbers: $average" . PHP_EOL;