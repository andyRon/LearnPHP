<?php
/* Smarty version 4.5.2, created on 2024-04-06 04:26:05
  from '/Users/andyron/myfield/github/LearnPHP/notes/php从入门到精通/code/e-business/system/templates/top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6610ceddc01630_28908998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37b98078c0749f93bfa5fe2c234f0ab521ca0662' => 
    array (
      0 => '/Users/andyron/myfield/github/LearnPHP/notes/php从入门到精通/code/e-business/system/templates/top.tpl',
      1 => 1698390846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6610ceddc01630_28908998 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="css/top.css" />
<?php echo '<script'; ?>
 src="js/top.js"><?php echo '</script'; ?>
>
<table width="856" height="113" border="0" cellpadding="0" cellspacing="0" background="images/shop_02.gif" id="__01">
<tr>
	<td width="234" rowspan="3">&nbsp;</td>
	<td colspan="19" height="82"></td>
</tr>
<tr>
    <td width="63" align="right" class="top"><a href="index.php" class="top"><strong>首页</strong></a></td>
    <td width="31" class="top"></td>
    <td width="68" height="32" align="center" valign="middle" background="images/top_20.gif" class="top"><a href="index.php?page_type=new" class="top"><strong>最新商品</strong></a></td>
	<td width="23" align="center" valign="middle" class="top"></td>
	<td width="67" height="32" align="center" valign="middle" background="images/top_20.gif" class="top"><a href="index.php?page_type=nom" class="top"><strong>推荐商品</strong></a></td>
    <td width="24" align="center" valign="middle" class="top"></td>
    <td width="68" height="32" align="center" valign="middle" background="images/top_20.gif"  class="top"><a href="index.php?page_type=hot" class="top"><strong>热门商品</strong></a></td>
    <td width="21" align="center" valign="middle"></td>
    <td width="77" height="32" align="center" valign="middle" background="images/top_20.gif"  class="top"><a href="index.php?page_type=queryform" class="top"><strong>订单查询</strong></a></td>
    <td width="11" align="center" valign="middle"></td>
    <td width="169" colspan="3" align="center" valign="middle"><div id="tm"></div></td>
</tr>
</table>
<?php }
}
