<?php
/* Smarty version 4.3.1, created on 2023-08-21 15:03:26
  from 'E:\wamp\www\TM\sl\25\admin\system\templates\links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64e30c3e840a81_44284715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72ce3994c46929adc4aec00440c2c4b021acb326' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\admin\\system\\templates\\links.tpl',
      1 => 1290082784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e30c3e840a81_44284715 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="css/table.css" />
<?php echo '<script'; ?>
 language="javascript" src="js/links.js"><?php echo '</script'; ?>
>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="addlink" name="addlink" method="post" action="addlinks.php" onsubmit="return addlinks(addlink)">
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" class="first">添加友情链接</td>
  </tr>
  <tr>
    <td width="40%" height="25" align="right" valign="middle" class="left">网站名称：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<input id="names" name="names" type="text" class="txt" /></td>
  </tr>
  <tr>
    <td width="40%" height="25" align="right" valign="middle" class="left">URL：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<input id="url" name="url" type="text" class="langtxt" /></td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center" valign="middle"><input id="enter" name="enter" type="submit" value="添加" class="btn"/></td>
  </tr>
</form>
</table><?php }
}
