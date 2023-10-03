<?php

class FileLogger implements Logger
{
    private string $filePath;

    /**
     * @param string $filePath
     */
    public function __construct (string $filePath = 'log_storage.txt')
    {
        $this->setFilePath($filePath);
    }

    /**
     * @param $message
     * @param $level
     * @return void
     */
    public function log ($message, $level): void
    {
        $date = date("d-m-Y H:i:s");
        $logBody = "[$date][$message][$level->value]" . PHP_EOL;
        file_put_contents($this->getFilePath(), $logBody, FILE_APPEND);
    }

    /**
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->filePath;
    }

    /**
     * @param string $filePath
     * @return void
     */
    public function setFilePath(string $filePath): void
    {
        $this->filePath = $filePath;
    }
}