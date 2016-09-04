<?php
$file = __DIR__ . '/datalist.txt';
$result = getResult($file);
echo '<pre>';
var_export($result);

function getResult($file)
{
    $read = fopen($file, 'r');
    $array = fread($read, filesize($file));
    $ar = explode("\n", $array);
    foreach ($ar as $a) {
        if (preg_match('/^[0-9 ]+$/', $a)) {
            $a = explode(' ', $a);
            $b = array_sum($a);
            $result[] = $b;
        }
    }
    arsort($result);
    return $result;
}



