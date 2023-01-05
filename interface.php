<?php
// Может содержать переменные, сонстанты, конструкт

interface IntComponent
{
    public function __construct(); // Так лучше не делать
    public function operator();
    const STRING = 'string';
}

interface IntComponentTwo extends IntComponent
{
    public function test();
}

class Component implements IntComponentTwo
{
    public function __construct()
    {
    }

    public function operator()
    {
        return 'operator';
    }

    public function test()
    {
        // TODO: Implement test() method.
    }
}

$obj = new Component();
echo $obj::STRING;