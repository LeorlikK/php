<?php

class One
{
    public function sum(int $a, ?int $b=null): array
    {
        $c = $a + $b;
        return [$c];
    }
}

trait Multiply
{
    public function sum(int $a, ?int $b=null):array
    {
        $c = parent::sum($a, $b);
        $d = $a * $b;
        return [$c, $d];
    }
}

class Two extends One
{
    use Multiply;
}

$obj = new Two();
$array = $obj->sum('5', '10');
var_dump($array);