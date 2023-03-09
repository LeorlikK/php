<?php
$website = "https://www.noob-club.ru/";
$method = "index.php?topic=82966.0";
$ch = curl_init($website . $method); // запрос
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // данные сохраняются в переменную
curl_setopt($ch, CURLOPT_HEADER, true); // получает заголовки http пакетов в ту же переменную
curl_setopt($ch, CURLOPT_NOBODY, true); // убирает тело запроса, оставляя только заголовки
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // переходить по редиректу
curl_setopt($ch, CURLOPT_PROXY_SSL_VERIFYHOST, false); // отключает проверки httpS
curl_setopt($ch, CURLOPT_PROXY_SSL_VERIFYPEER, false); // отключает проверки httpS
$result = curl_exec($ch); // выполнить запрос
curl_close($ch); // закрытие

var_dump($result);




//$file = fopen('pars.html', 'w');
//fwrite($file, $result);
////var_dump($result);
//$needleString = 'Отказ от системы сезонных модификаторов в 10.1 и полный список подземелий 2-го сезона';
//$result = (string)$result;
//$len = mb_strlen($needleString);
//$pos = strpos($result, $needleString);
//var_dump($len, $pos);
//$result = substr($result, $pos, $len);
//var_dump($result);