<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户注册</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script type="text/javascript">
  function chkinput(form){
  
    if(form.nc.value==""){
	  alert("请输入用户昵称!");
	  form.nc.select();
	  return(false);
	}
   if(form.pwd.value==""){
	  alert("请输入注册密码!");
	  form.pwd.select();
	  return(false);
	}
	 if(form.email.value==""){
	  alert("请输入E-mail地址!");
	  form.email.select();
	  return(false);
	}
	
	if(form.address.value==""){
	  alert("请输入家庭地址!");
	  form.address.select();
	  return(false);
	}
   return(true);
  }

</script>
<body>

</table>
<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#1170FF"><table width="500" height="157" border="0" align="center" cellpadding="0" cellspacing="1">
     <form name="form1" method="post" action="index.php"  onsubmit="return chkinput(this)">
	  <tr>
        <td height="25" colspan="2" bgcolor="#B5D3FF"><div align="center">用户注册</div></td>
      </tr>
      <tr>
        <td width="150" height="25" bgcolor="#FFFFFF"><div align="center">用户昵称：</div></td>
        <td width="347" bgcolor="#FFFFFF">&nbsp;<input type="text" name="nc" class="inputcss" size="25"></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">注册密码：</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="password" name="pwd" class="inputcss" size="25"></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">E-mail：</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="email" class="inputcss" size="25"></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">家庭住址：</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="address" class="inputcss" size="25"></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" name="submit" value="注册" class="buttoncss">&nbsp;&nbsp;<input type="reset" value="重写" class="buttoncss"></div></td>
      </tr>
	 </form> 
    </table></td>
  </tr>
</table>

<?php
 if(isset($_POST['submit']) && $_POST['submit']!=""){
 	$dbms='mysql';     					//数据库类型 ,对于开发者来说，使用不同的数据库，只要改这个，不用记住那么多的函数
	$host='localhost'; 					//数据库主机名
	$dbName='db_database19';    		//使用的数据库
	$user='root';      					//数据库连接用户名
	$pass='';          				//对应的密码
	$dsn="$dbms:host=$host;dbname=$dbName";
	try {
    	$pdo = new PDO($dsn, $user, $pass); 	//初始化一个PDO对象，就是创建了数据库连接对象$pdo
		$pdo->query("set names utf8");			//设置数据库编码格式
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 		$nc=$_POST['nc'];
    	$pwd=md5($_POST['pwd']);
    	$email=$_POST['email'];
    	$address=$_POST['address'];
		$query="call pro_reg('$nc','$pwd','$email','$address')";
		$result=$pdo->prepare($query);
		if($result->execute()){
            echo "<script>alert('注册成功！')</script>";
		}else{
            echo "<script>alert('注册失败！')</script>";
		}
	} catch (PDOException $e) {
    	echo 'PDO Exception Caught.';
		echo 'Error with the database:<br/>';
		echo  'SQL Query: '.$query;
		echo '<pre>';
    	echo "Error: " . $e->getMessage(). "<br/>";    	
		echo "Code: " . $e->getCode(). "<br/>";
		echo "File: " . $e->getFile(). "<br/>";
		echo "Line: " . $e->getLine(). "<br/>";
		echo "Trace: " . $e->getTraceAsString(). "<br/>";
		echo '</pre>';
	}
 }

?>
</body>
</html>
