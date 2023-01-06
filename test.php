<?php

class Test
{
    private array $hours = [];
    public array $testArray;

    public function addHours($hours):void
    {
        $this->hours[] = $hours;
    }

    public function hoursSum(): int
    {
        return array_sum($this->hours);
    }

    public function pushArray(array $array)
    {
        foreach ($array as $arr){
            $this->testArray[] = $arr;
        }
        return $this->testArray;
    }
}

$obj = new Test();
$obj->addHours(15);
$obj->addHours(17);
//echo $obj->hoursSum();

var_dump($obj->pushArray([10,20,30,40,50]));