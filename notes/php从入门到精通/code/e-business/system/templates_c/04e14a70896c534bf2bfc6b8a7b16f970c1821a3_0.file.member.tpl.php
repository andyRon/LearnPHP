<?php
/* Smarty version 4.3.1, created on 2023-08-21 14:03:19
  from 'E:\wamp\www\TM\sl\25\system\templates\member.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64e2fe278fb204_74839713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04e14a70896c534bf2bfc6b8a7b16f970c1821a3' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\system\\templates\\member.tpl',
      1 => 1686724918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e2fe278fb204_74839713 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="css/member.css" />
<?php echo '<script'; ?>
 language="javascript" src="js/member.js"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['check']->value == "find") {?>
<p align="left"><?php echo $_SESSION['member'];?>
&gt;&gt;&gt;<a href='?page_type=hyzx' id="mem">查看信息</a>&gt;&gt;&gt;<a href='?page_type=hyzx&action=modify' id="mem">修改密码</a></p>
<table  id="member" width="300" border="0" cellpadding="0" cellspacing="0">
<form id="member" name="member" method="post" action="modify_pwd_chk.php" onSubmit="return pwd(member)">
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" id="first"><font color="#f0f0f0">修改密码</font></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">原密码：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="old" name="old" type="password" /></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">新密码：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="new1" name="new1" type="password" /></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">确认密码：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="new2" name="new2" type="password" /></td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center" valign="middle"><input id="enter" name="enter" type="submit" value="修改" /></td>
  </tr>
</form>
</table>
<?php } else { ?>
<p align="left"><?php echo $_SESSION['member'];?>
&gt;&gt;&gt;<a href='?page_type=hyzx' id="mem">查看信息</a>&gt;&gt;&gt;<a href='?page_type=hyzx&action=modify' id="mem">修改密码</a></p>
<?php
$__section_pwd_id_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['pwdarr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_pwd_id_0_total = $__section_pwd_id_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_pwd_id'] = new Smarty_Variable(array());
if ($__section_pwd_id_0_total !== 0) {
for ($__section_pwd_id_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index'] = 0; $__section_pwd_id_0_iteration <= $__section_pwd_id_0_total; $__section_pwd_id_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index']++){
?>
<table id='member' width="500" border="0" cellpadding="0" cellspacing="0">
<form id="member" name="member" method="post" action="modify_info_chk.php" onSubmit="return mem(member)" >
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" id="first"><font color="#f0f0f0"><?php echo $_smarty_tpl->tpl_vars['pwdarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index'] : null)]['name'];?>
信息（不可更改信息）</font></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left"> 会员编号：</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;<?php echo $_smarty_tpl->tpl_vars['pwdarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index'] : null)]['id'];?>
</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left"> 会员名称：</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;<?php echo $_smarty_tpl->tpl_vars['pwdarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index'] : null)]['name'];?>
</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left"> 密保问题：</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;<?php echo $_smarty_tpl->tpl_vars['pwdarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index'] : null)]['question'];?>
</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">密保答案：</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;<?php echo $_smarty_tpl->tpl_vars['pwdarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index'] : null)]['answer'];?>
</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left"> 注册时间：</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;<?php echo $_smarty_tpl->tpl_vars['pwdarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index'] : null)]['addtime'];?>
</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">消费总额：</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;<?php echo $_smarty_tpl->tpl_vars['pwdarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index'] : null)]['consume'];?>
</td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" id="first"><font color="#f0f0f0"><?php echo $_smarty_tpl->tpl_vars['pwdarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index'] : null)]['name'];?>
信息（可更改信息）</font></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">真实姓名：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="realname" name="realname" type="text" value="<?php echo $_smarty_tpl->tpl_vars['pwdarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index'] : null)]['realname'];?>
" />&nbsp;
      <input type="hidden" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['pwdarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index'] : null)]['id'];?>
" />
      <font color="red">*</font></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">身份证号：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="card" name="card" type="text" value="<?php echo $_smarty_tpl->tpl_vars['pwdarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index'] : null)]['card'];?>
" />&nbsp;<font color="red">*</font></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">移动电话：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="tel" name="tel" type="text" value="<?php echo $_smarty_tpl->tpl_vars['pwdarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index'] : null)]['tel'];?>
">&nbsp;<font color="red">*</font> </td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">固定电话：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="phone" name="phone" type="text" value="<?php echo $_smarty_tpl->tpl_vars['pwdarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index'] : null)]['phone'];?>
" />&nbsp;<font color="red">*</font></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">Email：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="email" name="email" type="text" value="<?php echo $_smarty_tpl->tpl_vars['pwdarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index'] : null)]['Email'];?>
" /></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">QQ号：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="qq" name="qq" type="text" value="<?php echo $_smarty_tpl->tpl_vars['pwdarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index'] : null)]['QQ'];?>
" /></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">邮编：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="code" name="code" type="text" value="<?php echo $_smarty_tpl->tpl_vars['pwdarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index'] : null)]['code'];?>
" /></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">地址：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="address" name="address" type="text" value="<?php echo $_smarty_tpl->tpl_vars['pwdarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pwd_id']->value['index'] : null)]['address'];?>
" />&nbsp;<font color="red">*</font></td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center" valign="middle"><input name="enter" type="submit" id="enter" value="修改" />&nbsp;&nbsp;&nbsp;&nbsp;<input name="reset" type="reset" id="reset" value="重置" /></td>
  </tr>
</form>
</table>
<?php
}
}
}
}
}
