<?php
$arrayOne = array(1,2,3,4,5,6,7,8,9,10);
$arrayOne = [1,2,3,4,5,6,7,8,9,10];

$contentArray = array_filter($arrayOne, function ($stringArray) {
    return $stringArray !== 6;
});

$arrayTwo = [ # 8.7 и 8.2 заменяются на 8; true/false в 1,0; null в ""
    8.7 => 'myName8.7',
    8.2 => 'myName8.2',
    true => 'tr',
    false => 'fl',
    null => 'nl',
    100,
    'Hello'
];
echo key($arrayTwo);
echo $arrayTwo[8]; echo $arrayTwo[1]; echo $arrayTwo[0]; echo $arrayTwo[""]; echo $arrayTwo[9]; echo $arrayTwo[10];

$arrayThree = [
    10 => '100',
    20 => '200',
    30 => '300',
    1 => 111
];
$arrayThree = [ # ключ 1 перезаписал ключ 200 т.к его индекс был тоже 1
    100,
    200,
    300,
    1 => 111
];
echo $arrayThree[1];
for($i = 0, $size = count($arrayThree); $i < $size; $i++) {

    $arrayFour[$i] = random_int(100, 200);
}
$arrayFour[] = 'newKey';
unset($arrayFour[3]);

$source_array = ['foo' => 1, 'bar' => 2, 'baz' => 3];
['baz' => $three] = $source_array;
['foo' => $baz] = $source_array;
[2 => $baz] = $source_array;

$a = 1; $b = 2;
[$b, $a] = [$a, $b];
echo $a;    // выведет 2
echo $b;    // выведет 1

echo '<pre>';
var_dump($contentArray);
var_dump($arrayTwo);
var_dump($arrayThree);
var_dump($arrayFour);
var_dump($source_array);
echo '</pre>';

// Функции для работы с массивами

$arrayFive = ['one'=>1,'two'=>2,'three'=>3,'four'=>4,'five'=>5];
//$arrayFiveDop = ['a'=>11,'b'=>12,'c'=>13,'d'=>14,'i'=>15];
$arraySix = [1,2,3,4,5]; $arraySeven = [6,5,4,3,2,1];
$arrayFive = array_values($arrayFive);
//var_export((array) new A());
$res = array_diff($arraySeven, $arraySix);
$res = array_chunk($arraySix, 3, true);
$res = array_column($arrayFive, 'two', 'res');

$array_one = ['apple', 'ty', 'me']; $array_two = ['111', '222', '333'];
$res = array_combine($array_one,$array_two);
$res = array_count_values($arrayFive);
$res = array_flip($arrayFive);
$res = array_is_list($arraySix);
$res = array_key_exists('two', $arrayFive);
$res = array_key_first($arrayFive);
$res = array_key_last($arrayFive);
$res = array_keys($arrayFive);
arsort($arrayFive);
asort($arrayFive);
$res = array_map(function ($line){
    return $line == 5;
}, $arraySix);
// и т.д


// Распаковка и сравнение
$array = [1,2,3,4,5];
$res = arsort($array);
$array_one = [...$array];
echo $arraySeven === $arraySix;
echo $arraySeven == $arraySix;
echo $arraySeven !== $arraySix;

echo 'START';
echo '<pre>';
//var_dump($array);
//var_dump($arrayFive);
//var_dump($array_one);
echo '</pre>';
echo 'END';
