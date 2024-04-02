<?php
/* Smarty version 4.3.1, created on 2023-08-21 11:48:37
  from 'E:\wamp\www\TM\sl\25\system\templates\queryform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64e2de95894ab8_32590169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e8e344659e14274a7c2b616dcce7fa0d25827b0' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\system\\templates\\queryform.tpl',
      1 => 1289822528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e2de95894ab8_32590169 (Smarty_Internal_Template $_smarty_tpl) {
?><br />
<table width='540' border='0' align='center' cellpadding='0' cellspacing='0'>
<form id='queryform' name='queryform' method='post' action='#'>
  <tr>
    <td height='25' colspan='5' align='center' valign='middle' class='first'>查询订单</td>
  </tr>
  <tr>
    <td width='80' height='25' align='right' valign='middle' class='left'>查询用户：</td>
    <td width='130' height='25' align='left' valign='middle' class='center'>&nbsp;<input id='name' name='name' type='text' class='txt' /></td>
    
    <td width='100' height='25' align='right' valign='middle' class='center'>查询订单号：</td>
    <td width='130' height='25' align='left' valign='middle' class='right'>&nbsp;<input id='formid' name='formid' type='text' class='txt' /></td>
		<td width='100' align='center' valign='middle' class='center'><input id='enter' name='enter' type='button' value='查询' class='btn' onclick='return queryrst(queryform)'/></td>
  </tr>
  <tr>
    <td height='25' colspan='5' align='center' valign='middle'>&nbsp;</td>
    </tr>
</form>
</table>
<div id='exam'></div>


<?php }
}
