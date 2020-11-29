<?php

function pre($var)
{
    echo "<br><pre>";
    print_r($var);
    echo "</pre>";
}

class Task
{
    /**
     * @var array
     */
    private $task;

    /**
     * @return array|null
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * @param array $task
     */
    public function setTask(array $task): void
    {
        $this->task = $task;
    }

    public function writeTasks()
    {
        foreach ($this->task as $item => $value) {
            echo $value . "<br>";
        }
    }
}


$task1 = new Task();
$sql = 'SELECT * FROM `tasks` ORDER BY id DESC';
pre($task1);
pre($sql);

$task1->writeTasks($task1->getTask());