<?php

//$ch = curl_init('http://localhost:63342/curl/curl_cookie_two.php');
$ch = curl_init('http://test');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);

/** Первый вариант */
curl_setopt($ch, CURLOPT_COOKIE, 'curl_normal_cookie=111; curl_session_cookie=222');
/** Второй вариант */
$cookiefile = 'cookie.txt';
curl_setopt($ch,CURLOPT_COOKIEJAR, $cookiefile);
curl_setopt($ch,CURLOPT_COOKIEFILE, $cookiefile);
//curl_setopt($ch,CURLOPT_COOKIESESSION, $cookiefile); // передает только нормальные куки(не сессионые)
$result = curl_exec($ch);
curl_close($ch);
var_dump($result);
