<?php
/* Smarty version 4.3.1, created on 2023-06-15 14:26:21
  from 'E:\wamp\www\TM\sl\25\admin\system\templates\showpub.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648aaf0dae5db4_70718099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b7f953034d0fa4a1ec7976d8c2024faa677bfb1' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\admin\\system\\templates\\showpub.tpl',
      1 => 1290084528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648aaf0dae5db4_70718099 (Smarty_Internal_Template $_smarty_tpl) {
?><title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link rel="stylesheet" href="css/table.css" />
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/public.js"><?php echo '</script'; ?>
>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="showpub" name="showpub" method="post" action="#">
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" class="first">查看公告</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="center" valign="middle" class="left">删除</td>
    <td align="center" valign="middle" class="center">公告标题</td>
  </tr>
  <?php
$__section_pub_id_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['pubarr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_pub_id_0_total = $__section_pub_id_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_pub_id'] = new Smarty_Variable(array());
if ($__section_pub_id_0_total !== 0) {
for ($__section_pub_id_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_pub_id']->value['index'] = 0; $__section_pub_id_0_iteration <= $__section_pub_id_0_total; $__section_pub_id_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_pub_id']->value['index']++){
?>
  <tr>
    <td height="25" align="center" valign="middle" class="left"><input id="chk" name="chk[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['pubarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pub_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pub_id']->value['index'] : null)]['id'];?>
"></td>
    <td align="center" valign="middle" class="center"><?php echo $_smarty_tpl->tpl_vars['pubarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pub_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pub_id']->value['index'] : null)]['title'];?>
</td>
  </tr>
  <?php
}
}
?>
  <tr>
    <td height="25" colspan="2">
    	<a href="#" onclick="return alldel(showpub)">全选</a> <a href="#" onclick="return overdel(showpub)">反选</a>&nbsp;&nbsp;
      <input type="submit" value="删除选择" class="btn" style="border-color: #FFFFFF;" onClick = 'return delepub(showpub)'>
      &nbsp;&nbsp;
    </td>
  </tr>
</form>
</table>




<?php }
}
