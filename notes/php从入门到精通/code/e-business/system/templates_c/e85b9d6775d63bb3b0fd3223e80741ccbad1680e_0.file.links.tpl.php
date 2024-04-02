<?php
/* Smarty version 4.3.1, created on 2023-06-15 14:28:36
  from 'E:\wamp\www\TM\sl\25\system\templates\links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648aaf94239141_90307105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e85b9d6775d63bb3b0fd3223e80741ccbad1680e' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\system\\templates\\links.tpl',
      1 => 1289866900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648aaf94239141_90307105 (Smarty_Internal_Template $_smarty_tpl) {
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
