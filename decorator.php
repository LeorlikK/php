<?php

abstract class AbsComponent
{
    abstract public function operator();

    public function print()
    {
        return 'print';
    }
}

abstract class AbsDecorator extends AbsComponent
{
    const STRING = 'string';
    public $componentTwo;
    protected $component;

    public function __construct(AbsComponent $component)
    {
        $this->component = $component;
    }
}

class Component extends AbsComponent
{
    public function operator()
    {
        return 'operator';
    }
}

class Decorator extends AbsDecorator
{
    public function operator()
    {
        echo 'COD_1' . '<br>';
        echo $this->component->operator();
        echo 'COD_2' . '<br>';
        return 'END';
    }
}

$component = new Decorator(new Component());
echo $component::STRING;
echo $component->componentTwo;
$res = $component->operator();
echo $res;