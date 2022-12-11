<?php
$num = 1;
for ($i=0; $i<10; $i++){
    echo $i . '-' . $num . '<br>';
    $num +=1;
}

$num = 1;
for ($i=0; $i<10; ++$i){
    echo $i . '-' . $num . '<br>';
    $num +=1;
}

$array = [['one', 'two', 'three'], [1, 2, 3]];
for ($i=0; $i<count($array); $i++){
    var_dump($array[$i]); echo '<br>';
}

for($i = 0, $size = count($array); $i < $size; $i++) {
    echo 'size: '.$size; echo '<br>';
    echo 'i: '.$i; echo '<br>';
    var_dump($array[$i]); echo '<br>';
}

$i1 = 0; $i2 = 0;
while($i1<5 || $i2<6){
    ++$i1;
    echo $i1;
    $i2++;
    echo $i2;
}

$x = 0; $y = 0; $z = 0;
while($x<5 || $y<10){
    echo $x; echo '<br>';
    if($z>1){
        break;
    }
    $x += 1; $y += 1; $z += 1;
}

echo '$END';
