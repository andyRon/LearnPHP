<?php
//error_reporting(E_ALL);
//print_r(decbin(E_ALL));

set_error_handler('myErrorHandler2');

$content  = file_get_contents('https://xueyuanjun.com/error');
var_dump($content);

function myErrorHandler($errno, $errstr, $errfile, $errline)
{
    // 该级别错误不报告的话退出
   if (!(error_reporting() & $errno)) {
       return;
   }

   switch ($errno) {
       case E_ERROR:
           echo "致命错误类型: [$errno] $errstr\n";
           break;
       case E_WARNING:
           echo "警告错误类型: [$errno] $errstr\n";
           break;
       case E_NOTICE:
           echo "一般错误类型: [$errno] $errstr\n";
           break;
       default:
           echo "未知错误类型: [$errno] $errstr\n";
           break;
   }
}

// 通过error_log函数将错误信息写入日志文件
function myErrorHandler2($errno, $errstr, $errfile, $errline)
{
    // 该级别错误不报告的话退出
    if (!(error_reporting() & $errno)) {
        return;
    }

    $err_log = __DIR__ . DIRECTORY_SEPARATOR . 'logs';
    if (!file_exists($err_log)) {
        mkdir($err_log);
    }
    $err_file = $err_log . DIRECTORY_SEPARATOR . 'err.log';
    $msg = '';
    switch ($errno) {
        case E_ERROR:
            $msg = "致命错误类型: [$errno] $errstr\n";
            echo $msg;
            error_log($msg, 3, $err_file);
            break;
        case E_WARNING:
            $msg = "警告错误类型: [$errno] $errstr\n";
            echo $msg;
            error_log($msg, 3, $err_file);
            break;
        case E_NOTICE:
            $msg = "一般错误类型: [$errno] $errstr\n";
            echo $msg;
            error_log($msg, 3, $err_file);
            break;
        default:
            $msg = "未知错误类型: [$errno] $errstr\n";
            echo $msg;
            error_log($msg, 3, $err_file);
            break;
    }
}