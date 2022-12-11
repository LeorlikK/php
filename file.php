<?php
$file = file_get_contents('./doc/Time_Work.txt');
$file = file_put_contents('./doc/Time_Work.txt', "text \nText");

$file = fopen('./doc/Time_Work.txt', 'w');
fwrite($file, "text \nText");

$filename = './doc/Time_Work.txt';
$file = fopen('./doc/Time_Work.txt', 'r');
$content = fread($file, filesize($filename));
//while (($let = fgets($file)) !== false) $res = array_push($contentArray, trim($let)); # построчное считывание

$res = file_exists($filename);

rename($filename, 'NewFileName.txt');

unlink($filename);

echo __FILE__ . '<br>';
echo __DIR__ . $filename . '<br>';
echo fileperms($filename) . '<br>';

chmod($filename, 0777);

fclose($file);
echo  'END';