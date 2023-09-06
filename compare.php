<?php

$var1 = 70;
$var2 = 70.0;
var_dump($var1 == $var2); //true
var_dump($var1 === $var2); //false

$var1 = 70;
$var2 = '70';
var_dump($var1 == $var2); //true
var_dump($var1 === $var2); //false

$var1 = 1;
$var2 = true;
var_dump($var1 == $var2); //true
var_dump($var1 === $var2); //false

$var1 = true;
$var2 = '70';
var_dump($var1 == $var2); //true
var_dump($var1 === $var2); //false

$var1 = '';
$var2 = false;
var_dump($var1 == $var2); //true
var_dump($var1 === $var2); //false

$var1 = false;
$var2 = null;
var_dump($var1 == $var2); //true
var_dump($var1 === $var2); //false

$var1 = [];
$var2 = null;
var_dump($var1 == $var2); //true
var_dump($var1 === $var2); //false

$var1 = [1, 2, 3];
$var2 = true;
var_dump($var1 == $var2); //true
var_dump($var1 === $var2); //false