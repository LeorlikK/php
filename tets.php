<?php

class One
{
     public int $test = 0;
     public Two $class;

     public function __construct()
     {
         $this->class = new Two();
     }

    public function testFunc(): void
    {
        var_dump('TestFunc');
    }

    public function __clone(): void
    {
        $this->class = new Two();
    }
}

class Two
{
    public int $value = 0;
}

$objOne = new One();
$objOne->class->value += 1;
var_dump($objOne->class->value);
$objTwo = clone $objOne;
var_dump($objTwo->class->value);
$objOne->class->value += 1;
var_dump($objTwo->class->value);


