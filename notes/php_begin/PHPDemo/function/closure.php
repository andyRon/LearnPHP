<?php

$add = function (int $a, int $b) {
    return $a + $b;
};
var_dump($add);
$x = 1;
$y = 2;
$sum = $add($x, $y);
echo "$x + $y = $sum" . PHP_EOL;

$sum = call_user_func($add, $x, $y);
print_r($sum);