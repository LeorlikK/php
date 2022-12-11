<?php
$t1 = microtime(true);
sleep(3);
$t2 = microtime(true);
echo $t3 = $t2-$t1;echo '<br>';

$t1 = hrtime(true);
sleep(3);
$t2 = hrtime(true);
echo $t3 = $t2-$t1; echo '<br>';

$timer = new EvTimer(2, 2, function(){
    echo 'Kirill';
});
var_dump($timer);
