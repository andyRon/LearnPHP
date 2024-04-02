<?php
/* Smarty version 4.3.1, created on 2023-08-21 14:51:29
  from 'E:\wamp\www\TM\sl\25\admin\system\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64e3097139ef92_91604918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17b98bd945267dfb01de4f90a71ce25e2306b484' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\admin\\system\\templates\\index.tpl',
      1 => 1686795764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e3097139ef92_91604918 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link href="css/login.css" rel="stylesheet" type="text/css">
</head>
<?php echo '<script'; ?>
 type="text/javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/login.js"><?php echo '</script'; ?>
>
<body onLoad="javascript:login.user.focus()">
<form id="login" name="long" method="post" action="#">

<table width="1023" height="635" border="0" cellpadding="0" cellspacing="0" background="images/admin.jpg">
  <tr>
    <td width="341">&nbsp;</td>
    <td width="285" height="260">&nbsp;</td>
    <td width="397">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25" align="right">用户名：</td>
    <td><input name="user" type="text" id="user" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" size="20" ></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25" align="right">密码：</td>
    <td><input name="pwd" type="password" id="pwd" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" size="20"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="50">&nbsp;</td>
    <td><input id="enter" name="enter" type="button" value="" onClick="check_login(login)">&nbsp;<input id="reset" name="reset" type="reset" value=""></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="275">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table></form>

</body>
</html>
<?php }
}
