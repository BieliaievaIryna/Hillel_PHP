<?php

interface Logger
{
    public function log (string$message, LogLevel $level);
}