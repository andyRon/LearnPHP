<?php
/* Smarty version 4.3.1, created on 2023-08-21 11:02:14
  from 'E:\wamp\www\TM\sl\25\system\templates\showpub.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64e2d3b627d741_56589123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '484d1b5fae6403777e45afe64a6f650e13a909f4' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\system\\templates\\showpub.tpl',
      1 => 1289866382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e2d3b627d741_56589123 (Smarty_Internal_Template $_smarty_tpl) {
?><title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link rel="stylesheet" href="css/table.css" />
<table width="400" align="center" border="0" cellspacing="0" cellpadding="0">
<tr>
	<td colspan="2" height="25" align="center" valign="middle" class="first">公告信息</td>
</tr>
<?php
$__section_pub_id_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_pub_id_0_total = $__section_pub_id_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_pub_id'] = new Smarty_Variable(array());
if ($__section_pub_id_0_total !== 0) {
for ($__section_pub_id_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_pub_id']->value['index'] = 0; $__section_pub_id_0_iteration <= $__section_pub_id_0_total; $__section_pub_id_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_pub_id']->value['index']++){
?>
  <tr>
    <td width="70%" height="25" align="center" valign="middle" class="left">标题：<?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pub_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pub_id']->value['index'] : null)]['title'];?>
</td>
    <td width="30%" height="25" align="center" valign="middle" class="right">&nbsp;<?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pub_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pub_id']->value['index'] : null)]['addtime'];?>
</td>
  </tr>
  <tr>
    <td height="100" colspan="2" align="left" valign="top" class="all" style=" text-indent: 10px;"><br>&nbsp;<?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pub_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pub_id']->value['index'] : null)]['content'];?>
</td>
  </tr>
  <?php
}
}
?>
</table><?php }
}
