<?php

interface TestInterface
{
    public function work():int;
}

abstract class TestAbstract
{
    protected TestInterface $test;

    /**
     * @param TestInterface $test
     */
    public function __construct(TestInterface $test)
    {
        $this->test = $test;
    }
}

class RealClass extends TestAbstract
{
    public function workAbort()
    {
        echo 'Start' . '<br>';
        echo $this->test->work();
        echo 'End' . '<br>';
    }
}

class NewClass implements TestInterface
{

    public function work(): int
    {
        return  1000;
    }
}
$obj = new RealClass(new NewClass());
$obj->workAbort();