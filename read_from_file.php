<?php

$directory = __DIR__;
$filePath = "$directory/info.txt";

$myFile = fopen($filePath, 'r');

$data = file($filePath);
$line = $data[count($data) - 1];

fclose($myFile);

echo $line;