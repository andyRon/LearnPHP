<?php
/* Smarty version 4.3.1, created on 2023-06-15 14:28:36
  from 'E:\wamp\www\TM\sl\25\system\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648aaf94243554_66522056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8579d7b9f89852e61eb19b3e4c6bb58f3c5bd293' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\system\\templates\\search.tpl',
      1 => 1289878160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648aaf94243554_66522056 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="646" height="208" border="0" cellpadding="0" cellspacing="0" background="images/shop_05.gif">
	<tr>
		<td height="175" colspan="16">&nbsp;</td>
	</tr>
	<form id="searchform" name="searchform" method="post" action="#"> 
	<tr>
	  <td colspan="14" align="right"><input name="searchtxt" type="text" id="searchtxt" value="请输入商品名称" size="30" /></td>
      <td width="76" align="center"><input id="s_search" name="s_search" type="button" value="" onclick="return showsimple()" /></td>
      <td width="192"><input id="h_search" name="h_search" type="button" value="" onclick="return openwin()" /></td>
  </tr>
  </form>
</table>
<?php }
}
