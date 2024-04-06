<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>使用fetchColumn()方法读取数据库中的数据</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
-->
</style></head>

<body>

<table width="180">
    <tr>
        <td height="30" align="center"><strong>电影名称</strong></td>
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
            $query="select * from tb_movie";	//定义SQL语句
            $result=$pdo->prepare($query);			//准备查询语句
            $result->execute();						//执行查询语句，并返回结果集
            for($i=0;$i<5;$i++){					//循环读取数据
	?>	  
    <tr>
        <td height="26" align="center"><?php echo $result->fetchColumn(1);?></td>
    </tr>
    <?php
            }
        } catch (PDOException $e) {
            die ("Error!: " . $e->getMessage() . "<br/>");
        }
    ?>
</table>

</body>
</html>
