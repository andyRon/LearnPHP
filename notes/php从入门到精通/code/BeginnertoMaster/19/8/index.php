<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>通过errorInfo()方法获取错误信息</title>
</head>

<body>
<table width="310" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td height="30" align="center"><strong>ID</strong></td>
        <td align="center"><strong>PDO</strong></td>
        <td align="center"><strong>数据库</strong></td>
        <td align="center"><strong>时间</strong></td>
    </tr>
	<?php
        $dbms='mysql';     					//数据库类型
        $host='localhost'; 					//数据库主机名
        $dbName='db_database19';    		//使用的数据库
        $user='root';      					//数据库连接用户名
        $pass='';          				//对应的密码
        $dsn="$dbms:host=$host;dbname=$dbName";
        try {
            $pdo = new PDO($dsn, $user, $pass); 	//初始化PDO对象，就是创建数据库连接对象$pdo
            $query="select * from tb_pdo_mysqls";	//定义SQL语句
            $result=$pdo->query($query);				//执行查询语句，并返回结果集
            foreach($result as $items){
	?>	  
          <tr>
            <td height="22" align="center" valign="middle"><?php echo $items['id'];?></td>
            <td align="center" valign="middle"><?php echo $items['pdo_type'];?></td>
            <td align="center" valign="middle"><?php echo $items['database_name'];?></td>
            <td align="center" valign="middle"><?php echo $items['dates'];?></td>
          </tr>
    <?php
		    }
        } catch (PDOException $e) {
            print_r($pdo->errorInfo());
        }
    ?>
</table>
</body>
</html>
