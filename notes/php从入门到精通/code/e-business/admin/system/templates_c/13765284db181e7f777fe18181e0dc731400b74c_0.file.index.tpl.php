<?php
/* Smarty version 4.5.2, created on 2024-04-06 04:31:11
  from '/Users/andyron/myfield/github/LearnPHP/notes/php从入门到精通/code/e-business/admin/system/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6610d00f96c9f1_71998791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13765284db181e7f777fe18181e0dc731400b74c' => 
    array (
      0 => '/Users/andyron/myfield/github/LearnPHP/notes/php从入门到精通/code/e-business/admin/system/templates/index.tpl',
      1 => 1698391308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6610d00f96c9f1_71998791 (Smarty_Internal_Template $_smarty_tpl) {
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
