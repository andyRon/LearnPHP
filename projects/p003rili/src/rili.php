<!doctype html>
<html lang="en">
<style>

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>日历</title>
</head>
<body>
<?php
require "./Convert.php";
$convert = $_GET["convert"] ?? date("Y-m-d");
if ($convert != '') {
    $c = new Convert($convert);
    $time = $c->getLyTime();
//    echo $convert.'对应的农历时间：' . $time;
}
//php日历
//1.date()函数获取当前的年月
$year = isset($_GET["y"]) ? $_GET["y"] : date("Y");
$mon = isset($_GET["m"]) ? $_GET["m"] : date("m");
//2.mktime()函数的使用,获取当前月的天数及当月1号的星期
$day = date("t", mktime(0, 0, 0, $mon, 1, $year));//当前月的天数  31
$w = date("w", mktime(0, 0, 0, $mon, 1, $year));//当月1号的星期几  4
//3.输出日历的头部信息
echo "<div>";
echo "<table border='0'>";
echo "<h3><div>{$year}年{$mon}月</div></h3>";
echo "<tr id='tr1'onmouseOver='overTr(this)'onmouseOut='outTr(this)'>";
echo "<th style='color:#ff0000;'onmouseOver='overTr(this)'onmouseOut='outTr(this)'>日</th>";
echo "<th>一</th>";
echo "<th>二</th>";
echo "<th>三</th>";
echo "<th>四</th>";
echo "<th>五</th>";
echo "<th style='color:#ff0000;'>六</th>";
echo "</tr>";
//4.遍历输出日历
$d = 1;
while ($d <= $day) {
    echo "<tr onmouseOver='overTr(this)'onmouseOut='outTr(this)'>";
    for ($i = 1; $i <= 7; $i++) {//循环输出7天信息
        if ($d <= $day && ($w < $i || $d != 1)) {
            //'2014-10-1'(传入这样一个字符串)$year-$month-$d
            $ymd = $year . '-' . $mon . '-' . $d;
            echo "<th onmouseOver='overTh(this)' onmouseOut='outTh(this)'><a href='?convert=$ymd'>{$d}</a></th>";
            $d++;
        } else {
            echo "<th> </th>";
        }
    }
}
//5.处理上下月，上下年的信息
$prey = $nexty = $year;
$prem = $nextm = $mon;
if ($prem <= 1) {
    $prem = 12;
    $prey--;
} else {
    $prem--;
}
if ($nextm >= 12) {
    $nextm = 1;
    $nexty++;
} else {
    $nextm++;
}
$prey = $year - 1;//上一年
$nexty = $year + 1;//下一年
//超链接
echo "<tr  onmouseOver='overTr(this)'onmouseOut='outTr(this)'><td colspan='7'align='center'>";
echo "<a href='rili.php?y={$prey}'><<</a> ";
echo "<font face='隶书'color='#663399'>{$year}年</font> ";
echo "<a href='rili.php?y={$nexty}'>>></a>  ";
echo " ";
echo "<a href='rili.php?m={$prem}'><</a> ";
echo "<font face='隶书'color='#663399'>{$mon}月</font> ";
echo "<a href='rili.php?m={$nextm}'>></a>";
echo "</td></tr>";
echo "<tr onmouseOver='overTr(this)'onmouseOut='outTr(this)'><td colspan='7'>";
echo "<div>$convert 对应的农历时间：$time</div>";
echo "</td></tr>";
echo "</table>";
echo "</div>";

?>
<script type="text/javascript">

</script>
</body>
</html>

