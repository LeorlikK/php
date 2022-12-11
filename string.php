<?php
$str_1 = 'Hello World';
$str_2 = 'Привет Мир';
$needle = 'W';
echo mb_strlen($str_2) . '<br>';
echo strpos($str_1, $needle) . '<br>'; # регистро зависимый
echo stripos($str_1, $needle) . '<br>'; # регистро независимый, первое вхождение строки в строку
echo strrpos($str_1, $needle) . '<br>'; # регистро независимый, последнее вхождение строки в строку

echo mb_substr($str_1, 0, 5) . '<br>'; # вырезает байты
echo trim($str_1, ' %&?'); # обрезает пробелы(rtrim, ltrim)
echo str_replace('W', 'w', $str_1) . '<br>';
$res = explode(' ', $str_1); var_dump($res); echo '<br>';

echo $str_1 . '<br>';