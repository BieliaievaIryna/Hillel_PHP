<?php

$value = 1;

//if-else

if ($value === 1) {
    echo 'green' . PHP_EOL;
} elseif ($value === 2) {
    echo 'red' . PHP_EOL;
} elseif ($value === 3) {
    echo 'blue' . PHP_EOL;
} elseif ($value === 4) {
    echo 'brown' . PHP_EOL;
} elseif ($value === 5) {
    echo 'violet' . PHP_EOL;
} elseif ($value === 6) {
    echo 'black' . PHP_EOL;
} else {
    echo 'white' . PHP_EOL;
}

//switch

switch ($value) {
    case '1':
        echo 'green' . PHP_EOL;
        break;
    case '2':
        echo 'red' . PHP_EOL;
        break;
    case '3':
        echo 'blue' . PHP_EOL;
        break;
    case '4':
        echo 'brown' . PHP_EOL;
        break;
    case '5':
        echo 'violet' . PHP_EOL;
        break;
    case '6':
        echo 'black' . PHP_EOL;
        break;
    default:
        echo 'white' . PHP_EOL;
}

//match

$color = match ($value) {
    1 => 'green',
    2 => 'red',
    3 => 'blue',
    4 => 'brown',
    5 => 'violet',
    6 => 'black',
    default => 'white',
};
echo $color . PHP_EOL;