<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>中文字符串的截取类</title>
    <style type="text/css">
        <!--
        body, td {
            font-size: 12px;
        }

        td {
            padding-left: 22px;
        }

        body {
            margin-left: 10px;
            margin-top: 10px;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        -->
    </style>
</head>
<body>
<?php

class MsubStr
{
    function csubstr($str, $len)
    {                //$str指的是字符串，$len指的是截取的长度
        $tmpstr = "";                                        //初始化变量
        for ($i = 0; $i < $len; $i++) {                    //通过for循环语句，循环读取字符串
            if (ord(substr($str, $i, 1)) > 0xa0) {    //如果字符串中字符的ASCII值大于0xa0，则表示为汉字
                $tmpstr .= substr($str, $i, 3);            //取出3位字符赋给变量$tmpstr
                $i += 2;                                        //变量自加2
            } else {                                        //如果不是汉字，则取出一位字符赋给变量$tmpstr
                $tmpstr .= substr($str, $i, 1);
            }
        }
        return $tmpstr;                                    //返回截取的字符串
    }
}

$mc = new MsubStr();                                        //类的实例化
?>
<table width="204" height="163" background="images/bg.JPG">
    <tr height="30">
        <td></td>
    </tr>
    <tr height="28">
        <td><?php
            $strs = "关注明日科技，关注PHP从入门到精通新版图书";
            if (strlen($strs) > 30) {//判断字符串的长度
                echo $mc->csubstr($strs, 30) . "...";//应用类中的方法截取字符串
            } else {
                echo $strs;//输出字符串
            }
            ?>
        </td>
    </tr>
    <tr height="26">
        <td><?php
            $strs = "大数据时代，掌握数据分析技能";
            if (strlen($strs) > 30) {//判断字符串的长度
                echo $mc->csubstr($strs, 30) . "...";//应用类中的方法截取字符串
            } else {
                echo $strs;//输出字符串
            }
            ?></td>
    </tr>
    <tr height="22">
        <td>
            <?php
            $strs = "超级编程魔卡强势来袭，你还在等什么";
            if (strlen($strs) > 30) {//判断字符串的长度
                echo $mc->csubstr($strs, 30) . "...";//应用类中的方法截取字符串
            } else {
                echo $strs;//输出字符串
            }
            ?>
        </td>
    </tr>
    <tr height="35">
        <td><?php
            $strs = "零基础系列图书，让零基础学习者从入门到高手";
            if (strlen($strs) > 30) {//判断字符串的长度
                echo $mc->csubstr($strs, 30) . "...";//应用类中的方法截取字符串
            } else {
                echo $strs;//输出字符串
            }
            ?>
        </td>
    </tr>
</table>
</body>
</html>