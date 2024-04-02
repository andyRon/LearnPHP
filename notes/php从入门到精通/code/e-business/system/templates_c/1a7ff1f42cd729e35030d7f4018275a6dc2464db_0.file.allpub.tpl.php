<?php
/* Smarty version 4.3.1, created on 2023-08-21 11:02:09
  from 'E:\wamp\www\TM\sl\25\system\templates\allpub.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64e2d3b1831624_76241467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a7ff1f42cd729e35030d7f4018275a6dc2464db' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\system\\templates\\allpub.tpl',
      1 => 1289866500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e2d3b1831624_76241467 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="400" align="center" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2" height="25" align="center" valign="middle" class="first">全部公告</td>
  </tr>
<?php
$__section_arr_id_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_arr_id_0_total = $__section_arr_id_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_arr_id'] = new Smarty_Variable(array());
if ($__section_arr_id_0_total !== 0) {
for ($__section_arr_id_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index'] = 0; $__section_arr_id_0_iteration <= $__section_arr_id_0_total; $__section_arr_id_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index']++){
?>
  <tr>
    <td width="70%" height="25" align="right" valign="middle" class="left">标题：<a href="#" onclick="return showme(<?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index'] : null)]['id'];?>
,'showpub.php')"><?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index'] : null)]['title'];?>
</a></td>
    <td width="30%" height="25" align="center" valign="middle" class="right">&nbsp;<?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index'] : null)]['addtime'];?>
</td>
    </tr>
<?php
}
}
?>
</table>
<?php }
}
