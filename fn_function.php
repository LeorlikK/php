<?php

class Text
{
    static function make(string $str)
    {
        return new Two();
    }

    static function rules_one(string $str)
    {
        return $str;
    }
}


class Two
{
    public function two()
    {
        return 111;
    }

    public function rules_two($fn_function)
    {
        $fn_function_args = 44444444444444444;
        return $fn_function($fn_function_args);
    }
}

class Three
{
    public function three()
    {
//        $obj = Text::make('Hello')->rules_two(fn ($fn_function_args) => [
//            'request' => $fn_function_args,
//            'tyty' => 77
////            new Three()
//        ]);

        $obj = Text::make('Hello')->rules_two(function ($fn_function_args) {
            return [
                'request' => $fn_function_args,
                'tyty' => 77
            ];
        });

//        var_dump($obj());
        var_dump('<br>');
        var_dump($obj);
        var_dump('<br>');
        var_dump(gettype($obj));
    }

    public function rules_three(string $str)
    {
        return $str;
    }
}

$obj = new Three();
$obj->three();

echo 'Hello' . '<br>';

function sayHello(callable $name):string
{
    echo 'sayHello' . '<br>';
    return $name();
}

function getName():string
{
//    sleep(2);
    echo 'name' . '<br>';
    return 'Kirill';
}

//$answer = sayHello(fn() => getName());
$answer = sayHello(function () {
    return getName();
});
echo $answer;