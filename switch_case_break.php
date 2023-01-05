<?php

$x = 3;

switch ($x) {
    case 0:
        var_dump('0');
        break;
    case 1:
        var_dump('1');
        break;
    case 2:
        var_dump('2');
        break;
    case 3:
        var_dump('3');
        break;
    case 4;
        var_dump('4');
        break;

}

match ($x) {
    5 => var_dump('5'),
    4 => var_dump('4'),
    3 => var_dump('3'),
    2 => var_dump('2'),
    1 => var_dump('1'),
};