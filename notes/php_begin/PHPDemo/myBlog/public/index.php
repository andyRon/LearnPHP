<?php
require_once __DIR__ . '/../vendor/autoload.php';
// 初始化应用
$container = require_once __DIR__ . '/../app/bootstrap.php';

// 启动session
$session = new \App\Http\Session();
$session->start();
$container->bind('session', $session);

// 初始化全局请求实例 $request
$request = \App\Http\Request::capture();
$container->bind('request', $request);

//print_r($container);die();

// 注册路由
$router = require_once __DIR__ . '/../app/routes/web.php';

// 路由分发、处理请求、返回响应
$router->dispatch($request);