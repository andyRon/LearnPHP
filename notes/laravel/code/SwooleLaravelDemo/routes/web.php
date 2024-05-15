<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// swoole 异步任务队列测试
Route::get('/task/test', function () {
    $task = new \App\Jobs\TestTask('测试异步任务');
    $success = \Hhxsv5\LaravelS\Swoole\Task\Task::deliver($task);  // 异步投递任务，触发调用任务类的 handle 方法
    var_dump($success);
});


Route::get('/danmu', function() {
    return view('danmu');
});
