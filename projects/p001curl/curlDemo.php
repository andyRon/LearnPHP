<?php

// 1 初始化，获取的cURL资源
$ch = curl_init();
// 2 设置相关参数
curl_setopt($ch, CURLOPT_URL, 'http://www.baidu.com');
//curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 执行之后不直接打印出来

// 3 抓取URL
$str = curl_exec($ch);
// 4 关闭cURL资源，并且释放系统资源
curl_close($ch);

//echo $str;
echo str_replace("百度","php",$str);