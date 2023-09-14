<?php

function myUserFunction (int $value1, int $value2, callable $callbackFunction = null): int {
    $result = $value1 * $value2;

    if (is_callable($callbackFunction)) {
        $callbackFunction($result);
    }
    return $result;
};

$callbackFunction = function ($arg) {
    echo $arg . PHP_EOL;
};

myUserFunction(3, 10, $callbackFunction);
