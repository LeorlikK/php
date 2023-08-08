<?php
echo $time1 = time(); echo '<br>'; # текущий unix
echo $time2 = mktime(12,12,12,4,7,2015); echo '<br>';# создать собственный unix

echo date('H:i:s d.m.Y'); echo '<br>'; # текущая дата
echo date('H:i:s d.m.Y', $time1 - $time2); echo '<br>';
echo 'Day:' . time()/60/60/24;

echo strtotime('now'); echo '<br>';
echo strtotime('10 September 2000'); echo '<br>';
echo strtotime('+1 week'); echo '<br>';
echo strtotime('next Monday'); echo '<br>';

$date = new DateTime(); # '2022-4-8'
$date->modify('+1 day');
$timestamp = $date->getTimestamp();
echo $date->format('d:m.Y'); echo '<br>';

$time1 = '30:25:30';
$time2 = '15:00:00';
$time3 = strtotime($time1) + strtotime($time1) - strtotime('00:00:00');
echo date('d:H:i:s', $time3);
//$time2 = strtotime($time2) - strtotime('00:00:00');
//echo $time3 = $time2 + $time1; echo '<br>';
//echo 'D:' . $time3/60/60/24 . 'H:' . $time3/60/60;

function timeSwitch(DateInterval $dateTimeObj):string
{
    switch ($dateTimeObj){
        case $dateTimeObj->y > 0:
            return $dateTimeObj->format('%Yy %mm ago');
        case $dateTimeObj->m > 0:
            return $dateTimeObj->format('%mm ago');
        case $dateTimeObj->d > 0:
            return $dateTimeObj->format('%dd %hh ago');
        case $dateTimeObj->h > 0:
            return $dateTimeObj->format('%hh ago');
        case $dateTimeObj->i > 0:
            return $dateTimeObj->format('%im ago');
        case $dateTimeObj->s > 0:
            return $dateTimeObj->format('%ss ago');
    }

    return 'date-error';
}
