<?php
/* Smarty version 4.3.1, created on 2023-08-21 13:38:07
  from 'E:\wamp\www\TM\sl\25\system\templates\found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64e2f83f2cc035_99993567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c8a21570aace516da2432dfce86dcbe7c23d27b' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\system\\templates\\found.tpl',
      1 => 1686722951,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e2f83f2cc035_99993567 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link rel="stylesheet" href="css/table.css" />
</head>
<?php echo '<script'; ?>
 type="text/javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/found.js"><?php echo '</script'; ?>
>
<body>
<div id="first">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="foundname" name="found" method="post" action="#">
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" class="first"> 找回密码</td>
  </tr>
  <tr>
    <td width="113" height="25" align="right" valign="middle" class="left">会员名称：</td>
    <td width="187" align="left" valign="middle" class="right"><input id="user" name="user" type="text" class="txt"></td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle"><input id="next1" name="next1" type="button" class="btn" value="下一步" onClick="return chkname(foundname)"/></td>
    </tr>
</form>
</table>
</div>
<div id="second" style="display:none;">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="foundanswer" name="found" method="post" action="#">
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" class="first"> 找回密码</td>
  </tr>
  <tr>
    <td width="112" height="25" align="right" valign="middle" class="left">密保问题：</td>
    <td width="188" align="left" valign="middle" class="right"><div id="question"></div></td>
  </tr>
  <tr>
    <td width="112" height="25" align="right" valign="middle" class="left">密保答案：</td>
    <td width="188" align="left" valign="middle" class="right"><input id="answer" name="answer" type="text" class="txt" /></td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle"><input id="next2" name="next2" type="button" class="btn" value="下一步" onClick="return chkanswer(foundanswer)"></td>
    </tr>
</form>
</table>
</div>

<div id='third' style="display:none;">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="modifypwd" name="found" method="post" action="#">
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" class="first"> 输入密码</td>
  </tr>
  <tr>
    <td width="113" height="25" align="right" valign="middle" class="left">输入密码：</td>
    <td width="187" align="left" valign="middle" class="right"><input id="pwd1" name="pwd1" type="password" class="txt"></td>
  </tr>
  <tr>
    <td width="113" height="25" align="right" valign="middle" class="left">确认密码：</td>
    <td width="187" align="left" valign="middle" class="right"><input id="pwd2" name="pwd2" type="password" class="txt" /></td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle"><input id="next2" name="next2" type="button" class="btn" value="完成" onClick="return chkpwd(modifypwd)"></td>
    </tr>
</form>
</table>
</div>
</body>
</html>
<?php }
}
