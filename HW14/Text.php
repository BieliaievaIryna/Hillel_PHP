<?php

class Text
{
    protected string $text;

    public function __construct(string $text = 'some text')
    {
        $this->text = $text;
    }

    public function print(): void
    {
        echo ucfirst($this->text) . PHP_EOL;
    }
}