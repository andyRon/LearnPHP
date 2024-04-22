<?php
/* Smarty version 4.5.2, created on 2024-04-06 04:26:05
  from '/Users/andyron/myfield/github/LearnPHP/notes/php从入门到精通/code/e-business/system/templates/public.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6610ceddc1bf54_33916896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '262de5bd1bbb70cdbae19bdab79cf8cff1aee7eb' => 
    array (
      0 => '/Users/andyron/myfield/github/LearnPHP/notes/php从入门到精通/code/e-business/system/templates/public.tpl',
      1 => 1698390854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6610ceddc1bf54_33916896 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="210" height="193" border="0" cellpadding="0" cellspacing="0" background="images/shop_06.gif">
	<tr>
		<td height="35" width="17"></td>
        <td width="193" align="left" valign="top" class="exam"></td>
  </tr>
  	<tr>
		<td height="21" width="17"></td>
        <td width="193" align="left" valign="top" class="exam">
         <?php
$__section_ids_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ids_0_total = $__section_ids_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ids'] = new Smarty_Variable(array());
if ($__section_ids_0_total !== 0) {
for ($__section_ids_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] = 0; $__section_ids_0_iteration <= $__section_ids_0_total; $__section_ids_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']++){
?>
         	<a href="#" class="lk" onClick="return showme(<?php echo $_smarty_tpl->tpl_vars['arrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['id'];?>
,'showpub.php');" ><img src="images/man.JPG" width="14" height="11" border="0" /><?php echo $_smarty_tpl->tpl_vars['arrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['title'];?>
</a><br />
         <?php
}
}
?>
      </td>
  </tr>
  <tr>
		<td height="20" width="17"></td>
        <td width="193" align="left" valign="bottom" class="exam"><a href="?page_type=allpub" class="lk">>>more<<</a></td>
  </tr>
</table>
<?php }
}
