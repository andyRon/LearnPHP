<?php
	$conn=mysqli_connect("localhost","root","111") or die("数据库连接失败".mysqli_connect_error());	//连接服务器
	mysqli_select_db($conn,"db_database15");		//连接数据库
	mysqli_query($conn,"set names utf8");			//设置编码格式
?>
