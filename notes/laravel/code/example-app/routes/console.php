<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('welcome:message_simple', function () {
    $this->info("基于闭包实现 Artisan 命令");
})->description('打印欢迎信息');


