<?php
/* Smarty version 4.3.1, created on 2023-08-21 15:03:27
  from 'E:\wamp\www\TM\sl\25\admin\system\templates\showlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64e30c3f7239f3_10767306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd26dffe68d8b1948badee03315691b78e4f93d6' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\admin\\system\\templates\\showlinks.tpl',
      1 => 1467194110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e30c3f7239f3_10767306 (Smarty_Internal_Template $_smarty_tpl) {
?><title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link rel="stylesheet" href="css/table.css" />
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/links.js"><?php echo '</script'; ?>
>
<table width="" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="showlink" name="showlink" method="post" action="#">
  <tr>
    <td height="25" colspan="4" align="center" valign="middle" class="first">查看链接</td>
  </tr>
  <tr>
    <td width="30" height="25" align="center" valign="middle" class="left">删除</td>
    <td width="150" align="center" valign="middle" class="center">链接网站</td>
    <td width="250" align="center" valign="middle" class="center">URL</td>
    <td width="40" align="center" valign="middle" class="center">修改</td>
  </tr>
  <?php
$__section_link_id_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['linkarr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_link_id_0_total = $__section_link_id_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_link_id'] = new Smarty_Variable(array());
if ($__section_link_id_0_total !== 0) {
for ($__section_link_id_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_link_id']->value['index'] = 0; $__section_link_id_0_iteration <= $__section_link_id_0_total; $__section_link_id_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_link_id']->value['index']++){
?>
  <tr>
    <td height="25" align="center" valign="middle" class="left"><input id="chk" name="chk[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['linkarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_link_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_link_id']->value['index'] : null)]['id'];?>
"></td>
    <td align="center" valign="middle" class="center"><input id="wnames<?php echo $_smarty_tpl->tpl_vars['linkarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_link_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_link_id']->value['index'] : null)]['id'];?>
" name="wnames<?php echo $_smarty_tpl->tpl_vars['linkarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_link_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_link_id']->value['index'] : null)]['id'];?>
" type="text" class="txt" value="<?php echo $_smarty_tpl->tpl_vars['linkarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_link_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_link_id']->value['index'] : null)]['name'];?>
" /></td>
    <td align="center" valign="middle" class="center"><input id="wurl<?php echo $_smarty_tpl->tpl_vars['linkarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_link_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_link_id']->value['index'] : null)]['id'];?>
" name="wurl<?php echo $_smarty_tpl->tpl_vars['linkarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_link_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_link_id']->value['index'] : null)]['id'];?>
" type="text" class="langtxt" value="<?php echo $_smarty_tpl->tpl_vars['linkarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_link_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_link_id']->value['index'] : null)]['url'];?>
" /></td>
    <td align="center" valign="middle" class="center"><input id="modify" name="modify" type="button" class="btn" value="修改" onclick="return modlink(<?php echo $_smarty_tpl->tpl_vars['linkarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_link_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_link_id']->value['index'] : null)]['id'];?>
)" style="border-color:#FFFFFF;"/></td>
  </tr>
  <?php
}
}
?>
  <tr>
    <td height="25" colspan="4">
    	<a href="#" onclick="return alldel(showlink)">全选</a> <a href="#" onclick="return overdel(showlink);">反选</a>&nbsp;&nbsp;
      <input type="submit" value="删除选择" class="btn" style="border-color: #FFFFFF;" onclick="return dellinks(showlink);">
      &nbsp;&nbsp;
    </td>
  </tr>
</form>
</table>
<?php }
}
