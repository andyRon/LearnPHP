<?php
/* Smarty version 4.3.1, created on 2023-08-21 14:54:30
  from 'E:\wamp\www\TM\sl\25\admin\system\templates\addtype.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64e30a2644e4f2_73829307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4e1c32539a8055804980da3448ef443c0ea570e' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\admin\\system\\templates\\addtype.tpl',
      1 => 1290081936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e30a2644e4f2_73829307 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="css/table.css" />
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/chktype.js"><?php echo '</script'; ?>
>
<table width="300" border="0" align="left" cellpadding="0" cellspacing="0">
<form id="addtype" name="addtype" method="post" action="#">
	<tr>
		<td height="25" colspan="2" align="center" valign="middle" class="first">添加商品类别</td>
	</tr>
    <tr>
        <td height="25" align="right" valign="middle" class="left">类别名称：</td>
        <td height="25" align="left" valign="middle" class="right">&nbsp;<input name="names" type="text" id="names" class="txt" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
      </td>
    </tr>
    <tr>
        <td height="25" align="right" valign="middle" class="left">类别等级：</td>
        <td height="25" align="left" valign="middle" class="right">&nbsp;<select name="grade" OnChange="changetype(addtype)" class="txt">
                <option value="1">一级类别</option>
                <option value="2" selected>二级类别</option>
            </select>
      </td>
    </tr>
    <tr>
        <td height="25" align="right" valign="middle" class="left">父级名称：</td>
        <td height="25" align="left" valign="middle" class="right">&nbsp;<select name="supid">
<?php
$__section_f_id_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['f_arr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_f_id_0_total = $__section_f_id_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_f_id'] = new Smarty_Variable(array());
if ($__section_f_id_0_total !== 0) {
for ($__section_f_id_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_f_id']->value['index'] = 0; $__section_f_id_0_iteration <= $__section_f_id_0_total; $__section_f_id_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_f_id']->value['index']++){
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['f_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_f_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_f_id']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['f_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_f_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_f_id']->value['index'] : null)]['name'];?>
</option>
<?php
}
}
?>
        </select>
        </td>
    </tr>
    <tr>
        <td height="30" colspan="2" align="center" valign="middle">
        	<input id="add" name="id" type="button" value="添加" class="btn" onClick="chktype(addtype)">
        </td>
    </tr>
</form>
</table><?php }
}
