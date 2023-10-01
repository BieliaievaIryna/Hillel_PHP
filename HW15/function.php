<?php

//if need all information about the shape
function printInfo(Figure $figure): void
{
    $figure->displayUsedValues();
    $figure->displayArea();
    $figure->displayPerimeter();
}