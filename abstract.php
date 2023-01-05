<?php
// Может содержать переменные, сонстанты, конструкт, и даже реализацию методов

abstract class AbsClass
{
    abstract public function operator();
    abstract function test();
}
abstract class AdsDecorator extends AbsClass
{
    public $string;
    private $ind;
    static $stat = 10;
    const STRING = 'string';

    protected $component;

    public function __construct(AbsClass $component)
    {
        $this->component = $component;
    }
}
class Component extends AbsClass
{
    public function operator():string
    {
        return 'operator' . '<br>';
    }

    function test()
    {
        // TODO: Implement test() method.
    }
}
class Decorator extends AdsDecorator
{
    public function operator()
    {
        echo 'COD_1' . '<br>';
        echo $this->component->operator();
        echo 'COD_2' . '<br>';
    }

    function test()
    {
        // TODO: Implement test() method.
    }
}

$obj = new Decorator(new Component());
echo 'obj' . '<br>';
$obj->operator();