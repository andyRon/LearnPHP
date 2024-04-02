<?php
/* Smarty version 4.3.1, created on 2023-06-15 14:29:03
  from 'E:\wamp\www\TM\sl\25\system\templates\showcommo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648aafafea1d27_16529820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a65b673d19aae48d5a5d1b82fe49e23a3700079b' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\system\\templates\\showcommo.tpl',
      1 => 1686729108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648aafafea1d27_16529820 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="css/nominate.css" />
<link rel="stylesheet" href="css/table.css" />
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/showcommo.js"><?php echo '</script'; ?>
>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<table width="540" border="0" cellspacing="0" cellpadding="0">
	<tr>
   	  <td colspan="5" align="center" valign="middle" height="30" class="first">商品信息</td>
    </tr>
<?php
$__section_sho_id_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['shoarr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sho_id_0_total = $__section_sho_id_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sho_id'] = new Smarty_Variable(array());
if ($__section_sho_id_0_total !== 0) {
for ($__section_sho_id_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index'] = 0; $__section_sho_id_0_iteration <= $__section_sho_id_0_total; $__section_sho_id_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index']++){
?>
  <tr>
    <td width="140" height="100" rowspan="4" align="center" valign="middle" class="left"><img src="<?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index'] : null)]['pics'];?>
" width="100" height="80" alt="<?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index'] : null)]['name'];?>
" style="border: 1px solid #f0f0f0;"></td>
    <td width="100" height="25" align="center" valign="middle" class="center">商品名称：</td>
    <td width="100" height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index'] : null)]['name'];?>
</td>
    <td width="100" height="25" align="center" valign="middle" class="center">商品类别：</td>
    <td width="100" height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index'] : null)]['class'];?>
</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">商品品牌：</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index'] : null)]['brand'];?>
</td>
    <td height="25" align="center" valign="middle" class="center">商品型号：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index'] : null)]['model'];?>
</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">商品产地：</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index'] : null)]['area'];?>
</td>
    <td height="25" align="center" valign="middle" class="center">商品库存：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index'] : null)]['stocks'];?>
</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">市场价格：</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index'] : null)]['m_price'];?>
</td>
    <td height="25" align="center" valign="middle" class="center">会员价格：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index'] : null)]['v_price'];?>
</td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle" class="left">商品简介：</td>
    <td colspan="3" class="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index'] : null)]['info'];?>
</td>
    <td align="center" valign="middle" class="right"><input id="buy" name="buy" type="button" value="" class="buy" onclick="return buycommo(<?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sho_id']->value['index'] : null)]['id'];?>
)" ></td>
  </tr>
  <?php
}
}
?>
</table>
<?php }
}
