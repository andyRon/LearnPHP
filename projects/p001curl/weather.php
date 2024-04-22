<?php
header("Content-Type:text/html; charset=utf-8");
$data = 'theCityName=北京';
$url = 'http://www.webxml.com.cn/WebServices/WeatherWebService.asmx/getWeatherbyCityName';
$userAgent = 'user-agent:Mozilla/5.0 (Windows NT 5.1; rv:24.0) Gecko/20100101 Firefox/24.0';
$header = array("application/x-www-form-urlencoded; 
 charset=utf-8", "Content-length: ".strlen($data));

$curlObj = curl_init();
curl_setopt($curlObj, CURLOPT_URL, $url);
curl_setopt($curlObj, CURLOPT_USERAGENT, $userAgent);
curl_setopt($curlObj, CURLOPT_HEADER, 0);
curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curlObj, CURLOPT_POST, 1);
curl_setopt($curlObj, CURLOPT_POSTFIELDS, $data);
curl_setopt($curlObj, CURLOPT_HTTPHEADER, $header);
$res = curl_exec($curlObj);
if (!curl_errno($curlObj)) {
    echo $res;
} else {
    echo 'Curl error: ' . curl_error($curlObj);
}

curl_close($curlObj);
