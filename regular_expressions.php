<?php
$str_1 = 'Hello World';
var_dump(preg_split('/\s/', $str_1)); echo '<br>';
echo preg_match('#\s#', $str_1, $matches); var_dump($matches); echo '<br>'; # первое вхождение
echo preg_match_all('*\s*', $str_1, $matches); var_dump($matches); echo '<br>'; # все вхождения

echo '/s+/'; # все символы разделители
echo '/S+/'; # НЕ символы разделители
echo '/[zx]/';
echo '/[a-c]/';
echo '/[a-cA-Z]/';
echo '/[a-cA-Z0-9]/';

echo '/\w/'; # все симолы, буквы, знаки нижнего подчеркивания
echo '/\W/'; # НЕ все симолы, буквы, знаки нижнего подчеркивания
echo '/\d/'; # все цифры
echo '/\D/'; # НЕ цифры
echo '/\n/'; # перенос строки
echo '/\t/'; # символ табуляции

echo '/a(b|\s)/'; # Символ a, после которого идет b ИЛИ пробел
echo '/a./'; # а, и любой другой символ
echo '/\s{2,4}\w/'; # два или четыре пробела, и любой символ
echo '/[\S]\s{2,4}\w/'; # любой символ кроме пробела, два или четыре пробела, и любой символ

echo '/[^, \s]/'; # НЕ пробел
echo '/^[A_Z]/'; # если ^ не в [] и в начале строки, то это означает поиск в НАЧАЛЕ строки(1 символ)
echo '/[A_Z]$/'; # поиск в КОНЦЕ строки(1 символ)

echo '/[A_Z]+/'; # + это сокращенные {}, означающий один и более раз
echo '/[\d]{3}\s*'; # * это может быть, а может и не быть

echo '/.+?\s+/'; # ? меняет жадность
echo '/\s+/U'; # U глобально меняет жадность
echo '/\s+/u'; # u глобально мультибайтовый поиск
echo '/\s+/i'; # i глобально ищет строчные и прописные буквы
echo '/\s+/m'; # i глобальный построчный поиск

echo 'END' . '<br>';


//$filename = './doc/Time_Work.txt';
//$file = fopen($filename, 'r');
//
//$contentArray = [];
//while (($let = fgets($file)) !== false) $res = array_push($contentArray, trim($let));
//
//$contentArray = array_filter($contentArray, function ($stringArray) {
//    return $stringArray !== "";
//});
//$numberArray = [];
//foreach ($contentArray as $needNumber){
//    if(preg_match('/\d{2}:\d+:\d+/', $needNumber, $matches)){
//        $res = array_push($numberArray, $matches[0]);
//    }
//}
//
//$allTime = 0;
//foreach($numberArray as $num){
//    $nun = substr($num, 0, 9);
//    echo $num; echo '<br>';
//    $allTime += strtotime($nun) - strtotime('00:00:00');
//}
//echo date("d:H:i:s", $allTime);

//fclose($file);
