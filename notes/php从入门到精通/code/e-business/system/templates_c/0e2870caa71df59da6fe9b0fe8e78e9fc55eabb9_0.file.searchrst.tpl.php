<?php
/* Smarty version 4.3.1, created on 2023-08-21 11:44:42
  from 'E:\wamp\www\TM\sl\25\system\templates\searchrst.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64e2ddaa218b05_76483928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e2870caa71df59da6fe9b0fe8e78e9fc55eabb9' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\system\\templates\\searchrst.tpl',
      1 => 1686735944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e2ddaa218b05_76483928 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link rel="stylesheet" href="css/nominate.css" />
<link rel="stylesheet" href="css/table.css" />
</head>
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/showcommo.js"><?php echo '</script'; ?>
>
<body>
<?php if ($_smarty_tpl->tpl_vars['result']->value == "FALSE") {?>
<table width="540" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
   	  <td colspan="5" align="center" valign="middle" height="30" class="first">没有找到相关商品信息</td>
    </tr>
</table>
<?php } else { ?>
<table width="540" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
   	  <td colspan="5" align="center" valign="middle" height="30" class="first">商品信息</td>
    </tr>
<?php
$__section_sea_id_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['searcharr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sea_id_0_total = $__section_sea_id_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sea_id'] = new Smarty_Variable(array());
if ($__section_sea_id_0_total !== 0) {
for ($__section_sea_id_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index'] = 0; $__section_sea_id_0_iteration <= $__section_sea_id_0_total; $__section_sea_id_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index']++){
?> 
  <tr>
    <td width="140" height="100" rowspan="4" align="center" valign="middle" class="left"><img src="<?php echo $_smarty_tpl->tpl_vars['searcharr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index'] : null)]['pics'];?>
" width="100" height="80" alt="<?php echo $_smarty_tpl->tpl_vars['searcharr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index'] : null)]['name'];?>
" style="border: 1px solid #f0f0f0;"></td>
    <td width="100" height="25" align="center" valign="middle" class="center">商品名称：</td>
    <td width="100" height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['searcharr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index'] : null)]['name'];?>
</td>
    <td width="100" height="25" align="center" valign="middle" class="center">商品类别：</td>
    <td width="100" height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $_smarty_tpl->tpl_vars['searcharr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index'] : null)]['class'];?>
</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">商品品牌：</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['searcharr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index'] : null)]['brand'];?>
</td>
    <td height="25" align="center" valign="middle" class="center">商品型号：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $_smarty_tpl->tpl_vars['searcharr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index'] : null)]['model'];?>
</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">商品产地：</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['searcharr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index'] : null)]['area'];?>
</td>
    <td height="25" align="center" valign="middle" class="center">商品库存：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $_smarty_tpl->tpl_vars['searcharr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index'] : null)]['stocks'];?>
</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">市场价格：</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['searcharr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index'] : null)]['m_price'];?>
</td>
    <td height="25" align="center" valign="middle" class="center">会员价格：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $_smarty_tpl->tpl_vars['searcharr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index'] : null)]['v_price'];?>
</td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle" class="left">商品简介：</td>
    <td colspan="3" class="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['searcharr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index'] : null)]['info'];?>
</td>
    <td align="center" valign="middle" class="right"><input id="buy" name="buy" type="button" value="" class="buy" onclick="return buycommo(<?php echo $_smarty_tpl->tpl_vars['searcharr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sea_id']->value['index'] : null)]['id'];?>
)" ></td>
  </tr>
<?php
}
}
?>
</table>
<?php }?>
</body>
</html><?php }
}
