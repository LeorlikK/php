<?php
session_start();
$url = "https://www.noob-club.ru/index.php?action=login2";
$user = 'IgrokRIog';
$passwrd = 'noodxolidc2023';
$cookielength = 60;
$cookieneverexp = true;

$e6776c9cf9 = 'fd8dbf59f6589bad9943cd6fa788c921';
$hash_passwrd = 0;

function request(string $url, $postData = null, $cookiefile = 'cookie.txt')
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_NOBODY, false);

    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36');

    curl_setopt($ch, CURLOPT_PROXY_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_PROXY_SSL_VERIFYPEER, false);

    curl_setopt($ch,CURLOPT_COOKIEJAR, $cookiefile);
    curl_setopt($ch,CURLOPT_COOKIEFILE, $cookiefile);



    if ($postData){
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    }
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

file_put_contents('cookie.txt', ''); // Обнуляем и убеждаемся, что ничего нет

$postData = [
    'user' => 'IgrokRIog',
    'passwrd' => 'noodxolidc2023',
    'b30dfd20b9' => 'e482e42adcbc8b8aa90ae7c9c549b09f',
    'hash_passwrd' => ''
];

$html = request($url, $postData);
$file = fopen('pars.html', 'w');
fwrite($file, $html);
fclose($file);
echo $html;
//var_dump($html);