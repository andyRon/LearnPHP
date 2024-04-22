<?php
/* Smarty version 4.5.2, created on 2024-04-06 04:26:05
  from '/Users/andyron/myfield/github/LearnPHP/notes/php从入门到精通/code/e-business/system/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6610ceddbfbba9_59104611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd636f0dbc813913369e7668d5fbf4a2e0385edcc' => 
    array (
      0 => '/Users/andyron/myfield/github/LearnPHP/notes/php从入门到精通/code/e-business/system/templates/index.tpl',
      1 => 1698390861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:top.tpl' => 1,
    'file:login.tpl' => 1,
    'file:public.tpl' => 1,
    'file:links.tpl' => 1,
    'file:search.tpl' => 1,
    'file:bottom.tpl' => 1,
  ),
),false)) {
function content_6610ceddbfbba9_59104611 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>明日购物商城</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/table.css" />
<link rel="stylesheet" href="css/nominate.css" />
<link rel="stylesheet" href="css/pub.css" />
<link rel="stylesheet" href="css/reg.css"/>
<link rel="stylesheet" href="css/search.css"  />
<link rel="stylesheet" type="text/css" href="css/link.css"/>
<link rel="stylesheet" type="text/css" href="css/login.css"/>
<?php echo '<script'; ?>
 type="text/javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/links.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/showcommo.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src='js/queryform.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/shopcar.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/settle.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/search.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/info.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/login.js"><?php echo '</script'; ?>
>
</head>
<body>
<center>
<table width="850" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2"><?php $_smarty_tpl->_subTemplateRender('file:top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></td>
  </tr>
  <tr>
    <td width="216" align="left" valign="top">
	<?php $_smarty_tpl->_subTemplateRender('file:login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender('file:public.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender('file:links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </td>
    <td width="634" height="700" align="center" valign="top">
<?php $_smarty_tpl->_subTemplateRender('file:search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--载入模板文件--><?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['admin_phtml']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></td>
  </tr>
</table>
<table width="850" border="0" cellspacing="0" cellpadding="0">
	<tr>
    	<td><?php $_smarty_tpl->_subTemplateRender('file:bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></td>
    </tr>
</table>
</center>
</body>
</html>
<?php }
}
