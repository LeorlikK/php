<?php

class One
{
    public function sum(int $a, ?int $b=null): array
    {
        $c = $a + $b;
        return [$c];
    }

    public function minus($a, $b):int
    {
        return $a - $b;
    }
}

trait Sum
{
    public string $string = 'string';
    public static int $int = 50;

    public function sum(int $a, ?int $b=null):array
    {
        $this->testForTrait();
//        $c = parent::sum($a, $b);
        $c = 30;
        $d = $a * $b;
        return [$c, $d];
    }
}

trait Plus
{
    public function minus($a, $b):int
    {
        return $a + $b;
    }
}
class Two extends One
{
    use Sum,Plus;

    public function testForTrait()
    {
        echo 'testForTrait' . '<br>';
    }
}

echo 'LALALA';
$obj = new Two();
$array = $obj->sum('5', '10');
var_dump($array);
//
$int = $obj->minus(5, 10);
var_dump($int);

echo $obj->string;
echo $obj::$int > 50 ? '> 50' : '< 50';