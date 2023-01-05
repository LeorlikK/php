<?php
function checkRoom($trueFuncCall, $falseFuncCall):void
{
    $check = true;

    if ($check){
        $message = 'True';
        $trueFuncCall($message);
    }else{
        $message = 'False';
        $falseFuncCall($message);
    }
}
function checkTickets($message, callable $trueFuncTickets, $falseFuncTickets):void
{
    $avalibleTickets = $message;

    if ($avalibleTickets){
        echo 'checkTickets' . '<br>';
        $trueFuncTickets($avalibleTickets);
    }else{
        $falseFuncTickets($avalibleTickets);
    }
}
function trueFunc($message):void
{
    echo 'trueFunc' . '<br>';
    echo $message;
}
function falseFunc($message):void
{
    echo 'falseFunc' . '<br>';
    echo $message;
}
//checkRoom(fn ($message) => trueFunc($message), function ($message){
//    falseFunc($message);
//});
checkRoom(fn ($message) => checkTickets($message, fn($message) => trueFunc($message), 'falseFunc'), function ($message){
    falseFunc($message);
});