<?php

$directory = __DIR__;
$filePath = "$directory/info.txt";

$file = fopen($filePath, 'a+');

echo "Enter your arguments:" . PHP_EOL;
$arguments = fgets(STDIN);

fwrite($file, $arguments);

fclose($file);