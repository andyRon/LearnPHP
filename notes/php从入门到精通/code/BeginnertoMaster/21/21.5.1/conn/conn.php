<?php 
$conn=mysqli_connect("localhost","root","") or die('连接失败:' . mysqli_connect_error());
mysqli_select_db($conn,"db_database21") or die ('数据库选择失败:' . mysqli_error($conn));
mysqli_query($conn,"set names utf8");
?>
