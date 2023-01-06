<?php

interface WorkerInterface
{
    public function closeHours($hours);
    public function countSalary():int;
}

class WorkerClass implements WorkerInterface
{
    private array $hourse;

    public function closeHours($hours)
    {
        $this->hourse[] = $hours;
    }

    public function countSalary(): int
    {
        return array_sum($this->hourse) * 500;
    }
}

class WorkerProxy extends WorkerClass
{
    private int $salary = 0;
    private array $tytyArray = [];

    public function countSalary():int
    {
        if ($this->salary == 0){
            $this->salary = parent::countSalary();
        }
        return $this->salary;
    }
}

$obj = new WorkerProxy();
$obj->closeHours(10);
$obj->countSalary();
$obj->closeHours(10);
echo $obj->countSalary();

