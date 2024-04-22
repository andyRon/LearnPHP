<?php


// 数学函数
$num = 100;
$n1 = pow(100, 2); // 100的2次方
$n2 = sqrt(100);   // 100的平方根
$n3 = decbin(100);  // 转化为二进制
$n4 = mt_rand(0, 100);  // 生成0-100之间的随机数

//echo $n3, "\n\r", $n4;


file_put_contents("text.txt", "hello, andy");
$contents = file_get_contents("text.txt");
printf($contents);

$file = fopen("text.txt", 'w');
fwrite($file, ' ,shanghai, ');
fwrite($file, 'China');
fclose($file);

$file = fopen('text.txt', 'r');
$content = '';
while (!feof($file)) {
    $content .= fread($file, 1024);
}
fclose($file);
printf($content);

unlink('text.txt');