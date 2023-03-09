<?php
$url = "http://httpbin.org/ip";
$user = 'IgrokRIog';
$passwrd = 'noodxolidc2023';
$cookielength = 60;
$cookieneverexp = true;

$e6776c9cf9 = 'fd8dbf59f6589bad9943cd6fa788c921';
$hash_passwrd = 0;

$proxyUser = 'LZUgzkdi';
$proxyPassword = 'WG9b3Hbb';
function request(string $url, $proxyUser = null, $proxyPassword = null, $postData = null, $cookiefile = 'cookie.txt')
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    curl_setopt($ch, CURLOPT_HEADER, true);

    // PROXY
    if ($proxyUser && $proxyPassword){
        curl_setopt($ch, CURLOPT_PROXY, '45.84.178.146:48669');
        curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP); // CURLPROXY_HTTPS, CURLPROXY_SOCKS4 и т.д
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$proxyUser:$proxyPassword");
        curl_setopt($ch, CURLOPT_PROXYAUTH, CURLAUTH_BASIC);

        curl_setopt($ch, CURLOPT_TIMEOUT, 30); // время на загрузку данных
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20); // время на установку соединения
    }

    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

file_put_contents('cookie.txt', ''); // Обнуляем и убеждаемся, что ничего нет

$html = request($url, proxyUser:$proxyUser, proxyPassword:$proxyPassword);
$file = fopen('pars.html', 'w');
fwrite($file, $html);
fclose($file);
echo $html;
//var_dump($html);