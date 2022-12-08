<?php
$filename = './doc/Time_Work.txt';
$file = fopen($filename, 'r');
$content = fread($file, filesize($filename));
fclose($file);

var_dump($content);