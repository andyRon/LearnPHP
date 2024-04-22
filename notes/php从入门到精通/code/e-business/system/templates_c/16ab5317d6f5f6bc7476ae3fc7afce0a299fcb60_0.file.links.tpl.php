<?php
/* Smarty version 4.5.2, created on 2024-04-06 04:26:05
  from '/Users/andyron/myfield/github/LearnPHP/notes/php从入门到精通/code/e-business/system/templates/links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6610ceddc20006_12767694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16ab5317d6f5f6bc7476ae3fc7afce0a299fcb60' => 
    array (
      0 => '/Users/andyron/myfield/github/LearnPHP/notes/php从入门到精通/code/e-business/system/templates/links.tpl',
      1 => 1698390860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6610ceddc20006_12767694 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="__01" width="207" height="73" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="73" colspan="7" background="images/shop_11.gif">&nbsp;</td>
  </tr>
    
</table>
<table width="207" height="211" border="0" cellpadding="0" cellspacing="0" background="images/shop_13.gif" id="__01">

  <tr>
    <td height="45" colspan="8">&nbsp;</td>
  </tr>
  <tr>
   
    <td width="24" rowspan="2" align="center" valign="top" style="line-height: 25px;">	</td>
    <td width="183" rowspan="2" align="left" valign="top" style="line-height: 25px;">
	<?php
$__section_id_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['linarr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_id_1_total = $__section_id_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_id'] = new Smarty_Variable(array());
if ($__section_id_1_total !== 0) {
for ($__section_id_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_id']->value['index'] = 0; $__section_id_1_iteration <= $__section_id_1_total; $__section_id_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_id']->value['index']++){
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['linarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_id']->value['index'] : null)]['url'];?>
" target="_blank" class="lk"><?php echo $_smarty_tpl->tpl_vars['linarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_id']->value['index'] : null)]['name'];?>
</a><br />
    <?php
}
}
?>    </td>
  </tr>
</table>
<?php }
}
