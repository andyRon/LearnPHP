<?php
/* Smarty version 4.5.2, created on 2024-04-06 04:26:05
  from '/Users/andyron/myfield/github/LearnPHP/notes/php从入门到精通/code/e-business/system/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6610ceddc0a876_90161973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a308428bef68e3886a5f98b49e5f663085accc1' => 
    array (
      0 => '/Users/andyron/myfield/github/LearnPHP/notes/php从入门到精通/code/e-business/system/templates/login.tpl',
      1 => 1698390858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:info.tpl' => 1,
  ),
),false)) {
function content_6610ceddc0a876_90161973 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['member']->value == "游客") {?>
<table width="210" height="208" border="0" cellpadding="0" cellspacing="0" background="images/shop_04.gif">
<form id="login" name="login" method="post" action="#" onsubmit="return lg(this)">
  <tr>
    <td width="64" height="35">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" align="right">用户名：</td>
    <td colspan="2"><input name="name" type="text" id="name"  onmouseover="this.style.backgroundColor='#ffffff'" onmouseout="this.style.backgroundColor='#e8f4ff'" size="15" /></td>
  </tr>
  <tr>
    <td height="25" align="right">密码：</td>
    <td colspan="2"><input name="password" type="password" id="password"  onmouseover="this.style.backgroundColor='#ffffff'" onmouseout="this.style.backgroundColor='#e8f4ff'" size="15" /></td>
  </tr>
  <tr>
    <td height="25" align="right">验证码：</td>
    <td colspan="2"><input name="check" type="text" id="check"  onmouseover="this.style.backgroundColor='#ffffff'" onmouseout="this.style.backgroundColor='#e8f4ff'" size="10" /></td>
  </tr>
  <tr>
    <td height="30"><input name="check2" type="hidden" value="" /></td>
    <td width="44" onclick="javascript:code(login);"><?php echo '<script'; ?>
>yzm(login);<?php echo '</script'; ?>
></td>
    <td width="80"><a onclick="javascript:code(login)" style=" cursor:hand">换一张</a></td>
  </tr>
  <tr>
    <td height="25" colspan="3" align="center"><input type="image" src="images/login.JPG"></td>
  </tr>
  <tr>
    <td colspan="3" align="center"><a href="#" id="login" onclick="reg()"><img src="images/check.JPG" width="59" height="23" border="0" /></a>&nbsp;<a id="login" href="#" onclick="found()"><img src="images/pass.JPG" width="59" height="23" border="0" /></a><strong></td>
    </tr>
  </form>
</table>
<?php } else {
$_smarty_tpl->_subTemplateRender('file:info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
