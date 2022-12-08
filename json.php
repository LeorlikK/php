<?php
// WRITE
$data = [
    'Masha' => 26
];
$data = [
    'Masha' => [
        'age' => 26,
        'class' => 'Hunter'
    ]
];
$data = [
    'Кирилл' => [
        'age' => 25,
        'class' => 'Rogue'
    ],
    'Masha' => [
        'age' => 26,
        'class' => 'Hunter'
    ]
];

$res = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
$filename = './doc/testJSON.json';
$file = fopen($filename, 'w');
fwrite($file, $res);

// READ
$file = fopen($filename, 'r');
$content = fread($file, filesize($filename));
$content = json_decode($content, true); # true превращает из object в array // false не ассоциативный
echo gettype($content) . '<br>';

echo '<pre>';
print_r($content);

var_dump($content->Masha) . '<br>';
var_dump($content['Masha']) . '<br>';

print_r($content);
echo '</pre>';

