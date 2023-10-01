<?php

require_once 'function.php';
require_once 'Figure.php';
require_once 'Circle.php';
require_once 'Rectangle.php';

try {
    $circle = new Circle(80);

    //if only need some information about the shape to choose
    $circle->displayUsedValues();
    $circle->displayArea();
    $circle->displayPerimeter();

    //if need all information about the shape
//    printInfo($circle);
} catch (Exception$exception) {
    echo $exception->getMessage();
}

try {
    $rectangle = new Rectangle(30.5, 54);

    //if only need some information about the shape to choose
    $rectangle->displayUsedValues();
    $rectangle->displayArea();
    $rectangle->displayPerimeter();

    //if need all information about the shape
//    printInfo($rectangle);
} catch (Exception $exception) {
    echo $exception->getMessage();
}

