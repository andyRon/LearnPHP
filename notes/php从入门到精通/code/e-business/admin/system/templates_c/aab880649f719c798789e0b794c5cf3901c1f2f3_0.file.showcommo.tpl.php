<?php
/* Smarty version 4.3.1, created on 2023-08-21 15:00:29
  from 'E:\wamp\www\TM\sl\25\admin\system\templates\showcommo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64e30b8d18ba57_22552613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aab880649f719c798789e0b794c5cf3901c1f2f3' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\admin\\system\\templates\\showcommo.tpl',
      1 => 1291102800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e30b8d18ba57_22552613 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" href="css/table.css" />
</head>
<body>
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/alldelete.js"><?php echo '</script'; ?>
>
<table width="720"  border="0" cellpadding="0" cellspacing="0">
<form id="delcomm" name="delcomm" method="post" action="#">
  <tr>
    <td height="25" colspan="10" align="center" valign="middle" class="first">商品查看</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="left">&nbsp;</td>
    <td height="25" align="center" valign="middle" class="center">id</td>
    <td height="25" align="center" valign="middle" class="center">名称</td>
    <td height="25" align="center" valign="middle" class="center">品牌</td>
    <td height="25" align="center" valign="middle" class="center">产地</td>
    <td height="25" align="center" valign="middle" class="center">型号</td>
    <td height="25" align="center" valign="middle" class="center">库存</td>
    <td height="25" align="center" valign="middle" class="center">销量</td>
    <td height="25" align="center" valign="middle" class="center">加入时间</td>
    <td height="25" align="center" valign="middle" class="right">更改</td>
  </tr>
<?php
$__section_com_id_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['commoarr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_com_id_0_total = $__section_com_id_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_com_id'] = new Smarty_Variable(array());
if ($__section_com_id_0_total !== 0) {
for ($__section_com_id_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index'] = 0; $__section_com_id_0_iteration <= $__section_com_id_0_total; $__section_com_id_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index']++){
?>
  <tr>
    <td height="25" align="center" valign="middle" class="left">
    	<input id="chk" name="chk[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['commoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index'] : null)]['id'];?>
"></td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['commoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index'] : null)]['id'];?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['commoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index'] : null)]['name'];?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['commoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index'] : null)]['brand'];?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['commoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index'] : null)]['area'];?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['commoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index'] : null)]['model'];?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['commoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index'] : null)]['stocks'];?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['commoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index'] : null)]['sell'];?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $_smarty_tpl->tpl_vars['commoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index'] : null)]['addtime'];?>
</td>
    <td height="25" align="center" valign="middle" class="right">
    	<input id="modcomm" name="mod<?php echo $_smarty_tpl->tpl_vars['commoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index'] : null)]['id'];?>
" type='button' value="更改" class="btn" style=" border-color: #FFFFFF; cursor: ahnd;" onclick="modi(<?php echo $_smarty_tpl->tpl_vars['commoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_com_id']->value['index'] : null)]['id'];?>
)"/></td>
  </tr>
<?php
}
}
?> 
  <tr>
    <td colspan="10"><a href="#" onclick="return alldel(delcomm)">全选</a> <a href="#" onclick="return overdel(delcomm);">反选</a>&nbsp;&nbsp;
      <input type="submit" value="删除选择" class="btn" style="border-color: #FFFFFF;" onClick = 'return del(delcomm);'>
      &nbsp;&nbsp;</td>
    <?php echo '<?php'; ?>
 echo $sqlstr1 <?php echo '?>'; ?>
 </tr>
</form>
</table>

</body>
</html>
<?php }
}
