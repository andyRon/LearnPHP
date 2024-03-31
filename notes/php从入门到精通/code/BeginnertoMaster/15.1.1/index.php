<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>使用crypt()函数进行数据验证</title>
</head>
<body>
<?php
	$conn = mysqli_connect("localhost","root","111") or die("数据库连接错误".mysqli_connect_error());
	mysqli_select_db($conn,"db_database15") or die("数据库访问错误".mysqli_error($conn));;
	mysqli_query($conn,"set names utf8");
?>
<form id="form1" name="form1" method="post" action="">
    <label for="username">用户名：</label>
    <input name="username" type="text" id="username" size="15" />
    <input type="submit" name="Submit" value="检查" id="Submit" />
</form>
<?php
	if(isset($_POST['username']) && trim($_POST['username']) != ""){
		$usr = crypt(trim($_POST['username']),"tm");
		$sql = "select * from tb_user where user = '".$usr."'";
		$rst = mysqli_query($conn,$sql);
		if(mysqli_num_rows($rst) > 0){
			echo "<span style='color:red;'>该用户名已存在</span>";
		}else{
			echo "<span style='color:green;'>该用户名可以使用</span>";
		}
	}
?>
</body>
</html>
