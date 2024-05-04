<?php

use Swoole\Timer;

//$timerId = Timer::tick(1000, function () {
//   echo "Swoole 很棒\n";
//});

//Timer::clear($timerId);

//Timer::after(3000, function () {
//    echo "Laravel 也很棒\n";
//});


$count = 0;
Timer::tick(1000, function ($timerId, $count) {
    global $count;
    echo "Swoole 很棒\n";
    $count++;
    if ($count == 3) {
        Timer::clear($timerId);
    }
}, $count);