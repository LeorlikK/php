<?php

class One
{
    static int $one = 0;

    public function one(): string
    {
        try {
            throw new Exception();
        } catch (Exception $exception) {
            self::$one += 1;
            return $exception->getMessage();
        } finally {
            return 'finally';
        }
    }
}

$obj = new One();
$res = $obj->one();
echo  $res . '//' . $obj::$one;
