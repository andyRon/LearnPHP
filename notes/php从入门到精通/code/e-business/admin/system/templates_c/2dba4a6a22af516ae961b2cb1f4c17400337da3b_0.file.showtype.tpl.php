<?php
/* Smarty version 4.3.1, created on 2023-08-21 14:54:33
  from 'E:\wamp\www\TM\sl\25\admin\system\templates\showtype.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64e30a293c8a66_64179769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dba4a6a22af516ae961b2cb1f4c17400337da3b' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\admin\\system\\templates\\showtype.tpl',
      1 => 1620374148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e30a293c8a66_64179769 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="css/table.css" />
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/changetype.js"><?php echo '</script'; ?>
>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="modi" name="modi" method="post" action="#">
	<tr>
		<td height="25" colspan="2" align="center" valign="middle" class="first">查看商品类别</td>
	</tr>
<?php
$__section_big_id_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['bigarray']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_big_id_0_total = $__section_big_id_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_big_id'] = new Smarty_Variable(array());
if ($__section_big_id_0_total !== 0) {
for ($__section_big_id_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_big_id']->value['index'] = 0; $__section_big_id_0_iteration <= $__section_big_id_0_total; $__section_big_id_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_big_id']->value['index']++){
?>
    <tr>
      <td height="25" align="center" valign="middle" class="left"><font size="2" color="#FF0000">父类：</font><input id="moditype<?php echo $_smarty_tpl->tpl_vars['bigarray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_big_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_big_id']->value['index'] : null)]['id'];?>
" name="moditype<?php echo $_smarty_tpl->tpl_vars['bigarray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_big_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_big_id']->value['index'] : null)]['id'];?>
" type="text" class="shorttxt" value="<?php echo $_smarty_tpl->tpl_vars['bigarray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_big_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_big_id']->value['index'] : null)]['name'];?>
" style="border-color:#996633;" /></td>
      <td height="25" align="center" valign="middle" class="right"><input id="modify" name="modify" type="button" class="btn" value="修改" onclick="javascript:modifytype(<?php echo $_smarty_tpl->tpl_vars['bigarray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_big_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_big_id']->value['index'] : null)]['id'];?>
);" style="border-color:#FFFFFF;"/><input id="delete" name="delete" type="button" value="删除" class="btn" onclick="javascript:delbigtype(<?php echo $_smarty_tpl->tpl_vars['bigarray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_big_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_big_id']->value['index'] : null)]['id'];?>
);" style="border-color:#FFFFFF;"></td>
    </tr>
    <?php
$__section_small_id_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['smallarray']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_small_id_1_total = $__section_small_id_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_small_id'] = new Smarty_Variable(array());
if ($__section_small_id_1_total !== 0) {
for ($__section_small_id_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_small_id']->value['index'] = 0; $__section_small_id_1_iteration <= $__section_small_id_1_total; $__section_small_id_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_small_id']->value['index']++){
?>
    <?php if ($_smarty_tpl->tpl_vars['smallarray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_small_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_small_id']->value['index'] : null)]['supid'] == $_smarty_tpl->tpl_vars['bigarray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_big_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_big_id']->value['index'] : null)]['id']) {?>
    <tr>
      <td height="25" align="center" valign="middle" class="left" style="text-indent: 50px;" ><font size="2" color="#996600">子类：</font><input id="moditype<?php echo $_smarty_tpl->tpl_vars['smallarray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_small_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_small_id']->value['index'] : null)]['id'];?>
" name="moditype<?php echo $_smarty_tpl->tpl_vars['smallarray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_small_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_small_id']->value['index'] : null)]['id'];?>
" type="text" class="shorttxt" value="<?php echo $_smarty_tpl->tpl_vars['smallarray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_small_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_small_id']->value['index'] : null)]['name'];?>
" style="border-color:#996633;" /></td>
        <td height="25" align="center" valign="middle" class="right"><input id="modidfy" name="modify" type="button" value="修改" class="btn" onclick="javascript:modifytype(<?php echo $_smarty_tpl->tpl_vars['smallarray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_small_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_small_id']->value['index'] : null)]['id'];?>
)" style="border-color:#FFFFFF;"/><input id="delete" name="delete" type="button" value="删除" class="btn" onclick="javascript:delsmalltype(<?php echo $_smarty_tpl->tpl_vars['smallarray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_small_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_small_id']->value['index'] : null)]['id'];?>
)" style="border-color:#FFFFFF;"></td>
    </tr>
  	<?php }?>
    <?php
}
}
}
}
?>
</form>
</table>
<?php }
}
