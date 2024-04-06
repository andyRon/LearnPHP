<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>fetchAll()方法获取结果集中的所有行</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
table{
    border-collapse: collapse;
}
td{
    border: 1px solid #000000;
}
-->
</style></head>

<body>

<table width="500">
    <tr>
        <td height="40" align="center"><strong>ID</strong></td>
        <td align="center"><strong>电影名称</strong></td>
        <td align="center"><strong>主演</strong></td>
        <td align="center"><strong>类型</strong></td>
        <td align="center"><strong>片长</strong></td>
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
            $res=$result->fetchAll(PDO::FETCH_ASSOC);		//获取结果集中的所有数据
            for($i=0;$i<count($res);$i++){					//循环读取二维数组中的数据
	?>
    <tr>
        <td height="30" align="center"><?php echo $res[$i]['id'];?></td>
        <td align="center"><?php echo $res[$i]['name'];?></td>
        <td align="center"><?php echo $res[$i]['actor'];?></td>
        <td align="center"><?php echo $res[$i]['type'];?></td>
        <td align="center"><?php echo $res[$i]['length'];?>分钟</td>
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
