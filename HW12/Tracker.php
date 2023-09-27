<?php

class Tracker
{

    private string $filePath;
    public string $taskName;
    public int $priority;
    private $file;
    private array $tasks = [];
    public function __construct(string $filePath)
    {
        $this->setFilePath($filePath);
        $this->file = fopen($this->getFilePath(), 'r');
        while (($line = fgets($this->file)) !== false) {
            $task = explode('|', $line);
            $this->tasks[] = ['name' => $task[0], 'priority' => $task[1], 'status' => $task[2]];
        }
    }

    public function setFilePath (string $filePath): void
    {
        $this->checkFileExists($filePath);
        $this->filePath = $filePath;
    }

    public function getFilePath (): string
    {
        return $this->filePath;
    }

    public function addTask (string $taskName, int $priority): void
    {
        $status = StateTask::NotCompleted->value;
        $this->tasks[] = [
            'name' => $this->taskName = $taskName,
            'priority' => $this->priority = $priority,
            'status' => $status
        ];
        $this->file = fopen($this->getFilePath(), 'a');
        fwrite($this->file, "$taskName|$priority|$status" . PHP_EOL);
    }

    public function getTasks (): void
    {
        usort($this->tasks, function ($a, $b) {
            return $b['priority'] - $a['priority'];
        });
        foreach ($this->tasks as $task) {
            echo implode('|', $task);
        }
    }

    public function completeTask (int $taskId): void
    {
        $this->tasks[$taskId]['status'] = StateTask::Completed->value . PHP_EOL;

        $this->file = fopen($this->getFilePath(), 'w');
        foreach ($this->tasks as $task) {
            fwrite($this->file, "{$task['name']}|{$task['priority']}|{$task['status']}");
        }
    }

    public function deleteTask (int $taskId): void
    {
        unset($this->tasks[$taskId]);
        $this->file = fopen($this->getFilePath(), 'w');
        foreach ($this->tasks as $task) {
            fwrite($this->file, "{$task['name']}|{$task['priority']}|{$task['status']}");
        }
    }

    private function checkFileExists(string $filePath): void
    {
        if(!file_exists($filePath)) {
            throw new Exception('File does not exist');
        }
    }

    public function __destruct()
    {
        fclose($this->file);
    }
}