<?php

class MyException extends Exception
{

}

$a = null;

try {
    if (!$a) {
        throw new MyException('error');
    }
    echo 'ERROR';
} catch (MyException $myException) {
    echo $myException->getMessage();
}

echo 'END';