<?php

require_once 'Logger.php';
require_once 'LogLevel.php';
require_once 'FileLogger.php';
require_once 'DatabaseLogger.php';


$logFile = new FileLogger;
$logFile->log('new message8', LogLevel::INFO);
