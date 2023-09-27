<?php

require_once 'Text.php';
class TextToUpper extends Text
{
    public function print(): void
    {
        echo strtoupper($this->text) . PHP_EOL;
    }
}