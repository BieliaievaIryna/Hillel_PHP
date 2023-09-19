<?php

function fibonacciGenerator(int $limit): Generator
{
    $firstNumber = 0;
    $secondNumber = 1;
    while ($firstNumber < $limit) {
        yield $firstNumber;
        $nextNumber = $firstNumber + $secondNumber;
        $firstNumber = $secondNumber;
        $secondNumber = $nextNumber;
    }
}

$limit = 1000;
$fibonacciSequence = fibonacciGenerator($limit);

foreach ($fibonacciSequence as $number) {
    echo $number . PHP_EOL;
}