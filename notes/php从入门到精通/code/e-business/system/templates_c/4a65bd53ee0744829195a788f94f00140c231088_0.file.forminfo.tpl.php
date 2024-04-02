<?php
/* Smarty version 4.3.1, created on 2023-08-21 14:48:06
  from 'E:\wamp\www\TM\sl\25\system\templates\forminfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64e308a6bb0972_88948763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a65bd53ee0744829195a788f94f00140c231088' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\system\\templates\\forminfo.tpl',
      1 => 1289898056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e308a6bb0972_88948763 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link rel="stylesheet" href="css/table.css" />
</head>
<body>
<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25" colspan="4" align="center" valign="middle" class="first">订单查看 </td>
  </tr>
  <tr>
    <td width="80" height="25" align="right" valign="middle" class="left">订单号：</td>
    <td width="90" height="25" align="left" valign="middle" class="right"><font color="red">&nbsp;<?php echo $_smarty_tpl->tpl_vars['formarr']->value['formid'];?>
</font></td>
    <td width="70" height="25" align="right" valign="middle" class="right">订单时间：</td>
    <td width="160" height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $_smarty_tpl->tpl_vars['formarr']->value['formtime'];?>
</td>
  </tr>
  
  <tr>
    <td height="25" align="right" valign="middle" class="left">下单人：</td>
    <td height="25" class="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['formarr']->value['vendee'];?>
</td>
    <td height="25" align="right" valign="middle" class="center">收货人：</td>
    <td height="25" class="right">&nbsp;<?php echo $_smarty_tpl->tpl_vars['formarr']->value['taker'];?>
</td>
  </tr>
  <tr align="center" valign="middle">
    <td height="25" align="right" class="left">邮编：</td>
    <td height="25" align="left" class="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['formarr']->value['code'];?>
</td>
    <td height="25" align="right" valign="middle" class="center">电话：</td>
    <td height="25" align="left" class="right">&nbsp;<?php echo $_smarty_tpl->tpl_vars['formarr']->value['tel'];?>
</td>
  </tr>
  <tr align="center" valign="middle">
    <td height="25" align="right" class="left">地址：</td>
    <td height="25" colspan="3" align="left" class="right">&nbsp;<?php echo $_smarty_tpl->tpl_vars['formarr']->value['address'];?>
</td>
  </tr>
  <tr align="center" valign="middle">
    <td height="25" align="right" class="left">送货方式：</td>
    <td height="25" align="left" class="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['formarr']->value['del_method'];?>
</td>
    <td height="25" align="center" valign="middle" class="center">付款方式：</td>
    <td height="25" align="left" class="right">&nbsp;<?php echo $_smarty_tpl->tpl_vars['formarr']->value['pay_method'];?>
</td>
  </tr>
</table>
<table width="777" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20">&nbsp;</td>
  </tr>
</table>
<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="5" align="center" valign="middle" class="first">订单内容</td>
  </tr>
  <tr>
    <td width="100" height="25" align="center" valign="middle" class="left">商品名</td>
    <td width="100" height="25" align="center" valign="middle" class="center">数量</td>
    <td width="100" height="25" align="center" valign="middle" class="center">价格</td>
    <td width="100" height="25" align="center" valign="middle" class="center">价格折率</td>
    <td width="100" height="25" align="center" valign="middle" class="right">合计</td>
  </tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commname']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
  <tr>
    <td height="25" align="center" valign="middle" class="left"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
    <td height="25" align="center" valign="middle" class="center"><?php echo $_smarty_tpl->tpl_vars['commnumber']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</td>
    <td height="25" align="center" valign="middle" class="center"><?php echo $_smarty_tpl->tpl_vars['commagoprice']->value[$_smarty_tpl->tpl_vars['key']->value];?>
&nbsp;元</td>
    <td align="center" valign="middle" class="center"><?php echo $_smarty_tpl->tpl_vars['commfold']->value[$_smarty_tpl->tpl_vars['key']->value];?>
&nbsp;折</td>
    <td align="center" valign="middle" class="right"><?php echo $_smarty_tpl->tpl_vars['commagoprice']->value[$_smarty_tpl->tpl_vars['key']->value]*$_smarty_tpl->tpl_vars['commnumber']->value[$_smarty_tpl->tpl_vars['key']->value];?>
&nbsp;元</td>
  </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<tr>
	<td colspan="5" height="25" align="right" valign="middle">总消费：<?php echo $_smarty_tpl->tpl_vars['formarr']->value['total'];?>
&nbsp;元</td>
</tr>
</table>
<p align="center">恭喜您！订单提交成功。<br />请您在一周内按您的支付方式进行汇款,汇款时注明您的<font color="red">订单号</font>!汇款后请及时通知我们。<br />注意：</font>请记住<font color="red">订单号</font>。以便日后查询及有疑问时使用。</p>

<p align="center"><input type="button" value="我要打印" onclick="window.print()" class="btn" /> </p>
</body>
</html>
<?php }
}
