<?php

namespace App\testing;

use App\Test as BaseTest;

class Test extends BaseTest
{
    public static function print()
    {
        printf("这是Test子类的打印结果：%s", __CLASS__);
    }
}