<?php
/* Smarty version 4.3.1, created on 2023-08-21 15:02:05
  from 'E:\wamp\www\TM\sl\25\admin\system\templates\showmem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64e30bed613e42_63028163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b34971eee90ad717afeba546eff56242f9d9875' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\admin\\system\\templates\\showmem.tpl',
      1 => 1686801848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e30bed613e42_63028163 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<link rel="stylesheet" href="css/table.css" />
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/showmem.js"><?php echo '</script'; ?>
>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

<table width="400" border="0" cellpadding="0" cellspacing="1">
<form id="showmem" name="showmem" method="post" action="#"  onsubmit="return chkmem(modcommo)">
    <tr>
        <td colspan="2" height="25" align="center" valign="middle" class="first">会员信息</td>
    </tr>
	<?php
$__section_vip_id_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['viparr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_vip_id_0_total = $__section_vip_id_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_vip_id'] = new Smarty_Variable(array());
if ($__section_vip_id_0_total !== 0) {
for ($__section_vip_id_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index'] = 0; $__section_vip_id_0_iteration <= $__section_vip_id_0_total; $__section_vip_id_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index']++){
?>
    <tr>
        <td width="30%" height="25" class="left">会员名称：</td>
      <td width="618" class="right"><?php echo $_smarty_tpl->tpl_vars['viparr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index'] : null)]['name'];?>
</td>
    </tr>
    <tr>
        <td width="30%" height="25" class="left">消费总额：</td>
      <td width="618" class="right"><?php echo $_smarty_tpl->tpl_vars['viparr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index'] : null)]['consume'];?>
</td>
    </tr>
	<tr>
        <td width="30%" height="25" class="left">真实姓名：</td>
      <td height="25" class="right"><?php echo $_smarty_tpl->tpl_vars['viparr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index'] : null)]['realname'];?>
</td>
	</tr>
    <tr>
        <td width="30%" height="25" class="left">身份证号：</td>
      <td height="25" class="right"><?php echo $_smarty_tpl->tpl_vars['viparr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index'] : null)]['card'];?>
</td>
    </tr>

    <tr>
        <td width="30%" height="22" class="left">移动电话：</td>
      <td height="22" class="right"><?php echo $_smarty_tpl->tpl_vars['viparr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index'] : null)]['tel'];?>
</td>
    </tr>
    <tr>
        <td width="30%" height="25" class="left">固定电话：</td>
      <td height="25" class="right"><?php echo $_smarty_tpl->tpl_vars['viparr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index'] : null)]['phone'];?>
</td>
	</tr>
    <tr>
    	<td width="30%" height="25" class="left">Email：</td>
   	  <td height="25" class="right"><?php echo $_smarty_tpl->tpl_vars['viparr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index'] : null)]['Email'];?>
</td>
    </tr>
	<tr>
        <td width="30%" height="25" class="left">QQ号：</td>
      <td height="25" class="right"><?php echo $_smarty_tpl->tpl_vars['viparr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index'] : null)]['QQ'];?>
</td>
	</tr>
    <tr>
    	<td width="30%" height="25" class="left">邮编：</td>
   	  <td height="25" class="right">&nbsp;<?php echo $_smarty_tpl->tpl_vars['viparr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index'] : null)]['code'];?>
</td>
    </tr>
    <tr>
        <td width="30%" height="25" class="left">地址：</td>
      <td height="25" class="right"><?php echo $_smarty_tpl->tpl_vars['viparr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index'] : null)]['address'];?>
</td>
	</tr>
    <tr>
        <td width="30%" height="25" class="left">是否冻结：</td>
      <td height="25" class="right"><div id="isfree">
       <?php if ($_smarty_tpl->tpl_vars['viparr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index'] : null)]['isfreeze'] == 1) {?>冻结
      <?php } else { ?>未冻结<?php }?></div></td>
    </tr>
    <tr>
        <td width="30%" height="25" class="left">注册时间：</td>
      <td height="25" class="right"><?php echo $_smarty_tpl->tpl_vars['viparr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index'] : null)]['addtime'];?>
</td>
      </tr>
    <tr>
    	<td height="25" colspan="2" align="center" valign="bottom"><input
        id="free" name="free" type="button" class="btn" value="<?php if ($_smarty_tpl->tpl_vars['viparr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index'] : null)]['isfreeze'] == 1) {?>解冻<?php } else { ?>冻结<?php }?>" onClick= "return changestate(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['viparr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_vip_id']->value['index'] : null)]['isfreeze'];?>
)">
    	&nbsp;&nbsp;
   	  <input id="del" name="del" type="button" value="删除" class="btn" onclick="return dele(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
)"></td>
    </tr>
	<?php
}
}
?>
	</form>
</table>

</body>
</html>
<?php }
}
