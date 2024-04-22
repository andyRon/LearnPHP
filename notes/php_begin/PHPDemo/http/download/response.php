<?php

// 设置下载文件内容格式
header('Content-type: application/octet-stream');
// 设置下载文件名
header('Content-Disposition: attachment; filename="myFile.zip"');
// 读取二进制文件流返回给客户端浏览器
$filePath = __DIR__ . '/files/myFile7.zip';
readfile($filePath);