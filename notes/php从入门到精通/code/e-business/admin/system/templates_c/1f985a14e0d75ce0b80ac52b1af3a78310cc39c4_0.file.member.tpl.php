<?php
/* Smarty version 4.3.1, created on 2023-06-15 14:26:08
  from 'E:\wamp\www\TM\sl\25\admin\system\templates\member.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648aaf00f31560_33067238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f985a14e0d75ce0b80ac52b1af3a78310cc39c4' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\admin\\system\\templates\\member.tpl',
      1 => 1686801822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648aaf00f31560_33067238 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/member.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="css/table.css" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<table width="720"  border="0" cellpadding="0" cellspacing="0">
<form id="showmem" name="showmem" method="post" action="#">
  <tr>
    <td height="25" colspan="5" align="center" valign="middle" class="first">会员管理</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="left">&nbsp;</td>
    <td height="25" align="center" valign="middle" class="center">id</td>
    <td height="25" align="center" valign="middle" class="center">昵称</td>
    <td height="25" align="center" valign="middle" class="center">状态</td>
    <td height="25" align="center" valign="middle" class="right">查看信息</td>
  </tr>
<?php
$__section_mem_id_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['memarr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_mem_id_0_total = $__section_mem_id_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_mem_id'] = new Smarty_Variable(array());
if ($__section_mem_id_0_total !== 0) {
for ($__section_mem_id_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_mem_id']->value['index'] = 0; $__section_mem_id_0_iteration <= $__section_mem_id_0_total; $__section_mem_id_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_mem_id']->value['index']++){
?>
  <tr>
    <td height="25" align="center" valign="middle" class="left">
    	<input id="chk" name="chk[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['memarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_mem_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_mem_id']->value['index'] : null)]['id'];?>
"></td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['memarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_mem_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_mem_id']->value['index'] : null)]['id'];?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['memarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_mem_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_mem_id']->value['index'] : null)]['name'];?>
</td>
    <td height="25" align="center" valign="middle" class="center">
   <input id="free" name="free" type="button" class="btn" value = "<?php if ($_smarty_tpl->tpl_vars['memarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_mem_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_mem_id']->value['index'] : null)]['isfreeze'] == 0) {?>未冻结 <?php } elseif ($_smarty_tpl->tpl_vars['memarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_mem_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_mem_id']->value['index'] : null)]['isfreeze'] == 1) {?>冻结<?php }?>" style="border-color: #FFFFFF;" onClick="return changestate({ $memarr[mem_id].id},{ $memarr[mem_id].isfreeze})">
    </td>
    <td height="25" align="center" valign="middle" class="right">
    	<input id="show" name="show{ $memarr[mem_id].id}" type='button' value="详细信息" class="btn" style=" border-color: #FFFFFF; cursor: hand;" onclick="showme(<?php echo $_smarty_tpl->tpl_vars['memarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_mem_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_mem_id']->value['index'] : null)]['id'];?>
)"/></td>
  </tr>
<?php
}
}
?> 
  <tr>
    <td colspan="5"><a href="#" onclick="return alldel(showmem)">全选</a> <a href="#" onclick="return overdel(showmem);">反选</a>&nbsp;&nbsp;
      <input type="button" value="删除选择" onClick = 'return deletemem(showmem);'>
      &nbsp;&nbsp;</td>
     </tr>
</form>
</table>

</body>
</html>
<?php }
}
