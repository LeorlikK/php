<?php
$headers = [
    'Lala: 123'
];
$cookies = 'cookie1=value1; cookie2=value2;';
$ch = curl_init('http://test');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_COOKIE, $cookies);
$res = curl_exec($ch);
var_dump($res);
?>
