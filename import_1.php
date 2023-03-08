<?php
//require __DIR__ . '/import_2.php';
require 'import_2.php';
require 'doc/import_3.php';

use importTwo\Two;
use importThree\Three;

$two = new Two();
//$two = new \importTwo\Two();
$three = new Three();
echo $two->sumTwo(5, 10);