<?php

require_once 'DeliveryInternational.php';
require_once 'DeliveryByCountry.php';
require_once 'DeliveryByCity.php';

//if you want to send a parcel abroad
try {
    $parcel1 = new DeliveryInternational(37);
    echo $parcel1->printCost();
} catch (Exception $exception) {
    echo $exception->getMessage();
}

//if you want to send a parcel across the country
try {
    $parcel2 = new DeliveryByCountry(0);
    echo $parcel2->printCost();
} catch (Exception $exception) {
    echo $exception->getMessage();
}

//if you want to send a parcel through the city
try {
    $parcel3 = new DeliveryByCity(55);
    echo $parcel3->printCost();
} catch (Exception $exception) {
    echo $exception->getMessage();
}