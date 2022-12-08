<?php

class One
{
    function function_one($str)
    {
        var_dump($str);
        var_dump('<br>');
        return $str;
    }
}

$test_int = 111;
$obj = new One();
$res = $obj->function_one(function () use ($test_int){
    $test_int += 555;
    return 333 . $test_int;
});

var_dump($res());
var_dump('<br>');
var_dump($test_int);