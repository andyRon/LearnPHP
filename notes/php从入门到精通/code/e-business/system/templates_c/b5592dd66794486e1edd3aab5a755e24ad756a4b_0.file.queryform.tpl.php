<?php
/* Smarty version 4.5.2, created on 2024-04-06 04:26:24
  from '/Users/andyron/myfield/github/LearnPHP/notes/php从入门到精通/code/e-business/system/templates/queryform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6610cef074de90_25836285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5592dd66794486e1edd3aab5a755e24ad756a4b' => 
    array (
      0 => '/Users/andyron/myfield/github/LearnPHP/notes/php从入门到精通/code/e-business/system/templates/queryform.tpl',
      1 => 1698390854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6610cef074de90_25836285 (Smarty_Internal_Template $_smarty_tpl) {
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
