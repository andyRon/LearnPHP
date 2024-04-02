<?php
/* Smarty version 4.3.1, created on 2023-06-15 14:28:53
  from 'E:\wamp\www\TM\sl\25\system\templates\info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648aafa55af772_73260417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08eca1dae6313270dbfefd12c847bbdba087dff2' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\system\\templates\\info.tpl',
      1 => 1686722085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648aafa55af772_73260417 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="198" height="148" border="0" cellspacing="0" cellpadding="0" class="all">
<tr>
    <td align="center" valign="middle">欢迎您：<?php echo $_smarty_tpl->tpl_vars['member']->value;?>
</td>
</tr>
<tr>
    <td align="center" valign="middle"><a href="?page_type=hyzx" class="lk">会员中心</a></td>
</tr>
<tr>
    <td align="center" valign="middle"><a href="?page_type=shopcar" class="lk">查看购物车</a></td>
</tr>
<tr>
    <td align="center" valign="middle"><a onclick="javascript:logout()" style="cursor:pointer" id="info">安全离开</a></td>
</tr>
</table>
<?php }
}
