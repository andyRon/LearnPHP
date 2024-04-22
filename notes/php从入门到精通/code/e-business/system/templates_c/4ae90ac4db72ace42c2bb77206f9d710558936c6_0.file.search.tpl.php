<?php
/* Smarty version 4.5.2, created on 2024-04-06 04:26:05
  from '/Users/andyron/myfield/github/LearnPHP/notes/php从入门到精通/code/e-business/system/templates/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6610ceddc22f28_88554587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ae90ac4db72ace42c2bb77206f9d710558936c6' => 
    array (
      0 => '/Users/andyron/myfield/github/LearnPHP/notes/php从入门到精通/code/e-business/system/templates/search.tpl',
      1 => 1698390851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6610ceddc22f28_88554587 (Smarty_Internal_Template $_smarty_tpl) {
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
