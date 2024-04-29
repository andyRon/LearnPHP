<?php
namespace App;
use App\testing\Test as SubTest;

spl_autoload_register(function ($className) {
    $path = explode('\\', $className);
    if ($path[0] == 'App') {
        $base = __DIR__;
    }
    $filename = $path[count($path) - 1] . '.php';
    $filePath = $base;
    foreach ($path as $key => $val) {
        if ($key == 0 || $key == count($path) - 1) {
            continue;
        }
        $filePath .= DIRECTORY_SEPARATOR . strtolower($val);
    }
    $filePath .= DIRECTORY_SEPARATOR . $filename;
    require_once $filePath;
});

Test::print();
SubTest::print();