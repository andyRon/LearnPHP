<?php
require("system.smarty.inc.php");	//包含Smarty配置类
require("system.class.inc.php");	//包含数据库连接和操作类

$connobj=new ConnDB("mysql","localhost","root","33824","db_database25");//数据库连接类实例化
$conn=$connobj->GetConnId();		//执行连接操作，返回连接标识

$admindb=new AdminDB();//数据库操作类实例化

$seppage=new SepPage();//分页类实例化

$smarty=new SmartyProject();//调用smarty模板

?>