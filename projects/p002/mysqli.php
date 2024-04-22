<?php
include 'conn.inc.php';
$mysqli = new mysqli(HOST, USER, PWD);
mysqli_select_db($mysqli, 'mytest');
if ($mysqli->connect_errno) {
    die("数据库连接错误" . $mysqli->connect_error);
}