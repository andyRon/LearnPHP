<?php

//header('HTTP/1.1 301 Move Permanently');
//header('Location: http://www.baidu.com');

//header('WWW-Authenticate: Basic');


// HTTP Basic 认证简单实现
if (empty($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic');
} else {
    $name = $_SERVER['PHP_AUTH_USER'];
    $pass = $_SERVER['PHP_AUTH_PW'];
    if ($name == 'jack' && $pass == '123456') {
        echo '用户认证成功，可以访问该页面';
    } else {
        header('HTTP/1.1 401 Unauthorized');
        echo '用户认证失败，请刷新页面重试';
    }
}