<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  	
$rd = $_GET['rd'];
$reback = "1";
$arr = explode(",",$rd); 
for($i = 0; $i < count($arr); $i++){
	$sql = "delete from tb_commo where id = ".$arr[$i];
	$rst = $admindb->ExecSQL($sql,$conn);
	if(false == $rst){
		$reback = "0";
	}
}
echo $reback;
?>