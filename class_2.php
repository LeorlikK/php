<?php

require_once ('vendor/autoload.php');
use Education\ClassOne;
$obj_1 = new ClassOne();
//$obj_1 = new Education\ClassOne();

//require_once ('ClassOne.php');
//$obj_1 = new classOneOne\ClassOne();
echo $obj_1->funcOneClassOne();
echo $obj_1->funcTwoClassOne();

require_once ('class_1.php');
$obj_2 = new Class_1File();
echo $obj_2->func_1One();
echo $obj_2->func_1Two();
$a = 7.45;
echo gettype($a);
echo 'END';
