<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$rd = $_GET['rd'];
$reback = "1";
$arr = explode(",",$rd);
for($i = 0; $i < count($arr); $i++){
	$sql = "delete from tb_form where id = ".$arr[$i];
	$formarr = $admindb->ExecSQL($sql,$conn);
	if(false == $formarr){
		$reback = "0";
	}
}
echo $reback;
?>