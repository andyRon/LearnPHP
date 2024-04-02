<?php
/* Smarty version 4.3.1, created on 2023-08-21 16:10:52
  from 'E:\wamp\www\TM\sl\25\system\templates\h_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64e31c0cac79e4_43924063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14fcd18bba6a9597232c9693288abe84abf11565' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\system\\templates\\h_search.tpl',
      1 => 1289878504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e31c0cac79e4_43924063 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link rel="stylesheet" href="css/nominate.css" />
<link rel="stylesheet" href="css/table.css" />
</head>
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/search.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/showcommo.js"><?php echo '</script'; ?>
>
<body>
<div id="showme">
<table width="540" border="0" cellpadding="0" cellspacing="0" align="center">
<form id="high" name="high" method="post" action="#">
	<tr>
		<td height="25" colspan="2" align="center" valign="middle" class="first">高级查询</td>
	</tr>
	<tr>
		<td width="150" height="25" align="right" valign="middle" class="left">产品名称：</td>
	  <td class="right" style=" text-indent:20px;"><input id="name" name="name" type="text" class="txt" /></td>
	</tr>
	<tr>
		<td width="150" height="25" align="right" valign="middle" class="left">产品型号：</td>
	  <td class="right"  style=" text-indent:20px;"><input id="model" name="model" type="text" class="txt" /></td>
	</tr>
	<tr>
		<td width="150" height="25" align="right" valign="middle" class="left">产品类别：</td>
	  <td class="right"  style=" text-indent:20px;"><input id="stype" name="stype" type="text" class="txt" /></td>
	</tr>
	<tr>
	  <td height="25" colspan="2" align="center" valign="middle"  style=" text-indent:20px;">
	  <input name="hsearch" type="button" class="btn" id="hsearch" value="查询" onclick="return showhsearch()" /></td>
	</tr>
</form>
</table>
</div>
</body>
</html>
<?php }
}
