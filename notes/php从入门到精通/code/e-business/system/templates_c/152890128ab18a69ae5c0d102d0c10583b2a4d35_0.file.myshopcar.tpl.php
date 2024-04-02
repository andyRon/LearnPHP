<?php
/* Smarty version 4.3.1, created on 2023-06-15 14:28:54
  from 'E:\wamp\www\TM\sl\25\system\templates\myshopcar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648aafa6e508b3_29350252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '152890128ab18a69ae5c0d102d0c10583b2a4d35' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\system\\templates\\myshopcar.tpl',
      1 => 1289823284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648aafa6e508b3_29350252 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="0" cellspacing="0" cellpadding="0" align="center">
<form id="myshopcar" name="myshopcar" method="post" action="#">
  <tr>
    <td height="30" colspan="7" align="center" valign="middle" class="first">我的购物车</td>
  </tr>
  <tr>
    <td width="35" height="25" align="center" valign="middle" class="left">&nbsp;</td>
    <td width="100" height="25" align="center" valign="middle" class="center">商品名称</td>
    <td width="100" height="25" align="center" valign="middle" class="center">购买数量</td>
    <td width="100" height="25" align="center" valign="middle" class="center">市场价格</td>
    <td width="100" height="25" align="center" valign="middle" class="center">会员价格</td>
    <td width="100" height="25" align="center" valign="middle" class="center">折扣率</td>
    <td width="100" height="25" align="center" valign="middle" class="right">合计</td>
  </tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commarr']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
  <tr>
    <td height="25" align="center" valign="middle" class="left"><input id="chk" name="chk[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"></td>
    <td height="25" align="center" valign="middle" class="center"><div id = "c_name<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"> &nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</div></td>
    <td height="25" align="center" valign="middle" class="center"><input id="cnum<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="cnum<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" type="text" class="shorttxt" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['num'];?>
" onkeyup="cvp(<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['item']->value['v_price'];?>
,<?php echo $_smarty_tpl->tpl_vars['shoparr']->value;?>
)"></td>
    <td height="25" align="center" valign="middle" class="center"><div id="m_price<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['m_price'];?>
</div></td>
    <td height="25" align="center" valign="middle" class="center"><div id="v_price<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['v_price'];?>
</div></td>
    <td height="25" align="center" valign="middle" class="center"><div id="fold<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['fold'];?>
</div></td>
    <td height="25" align="center" valign="middle" class="right"><div id="total<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
</div></td>
  </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <tr>
    <td height="25" colspan="3" align="left" valign="middle">
    <a href="#" onclick="return alldel(myshopcar)">全选</a> <a href="#" onclick="return overdel(myshopcar);">反选</a>&nbsp;&nbsp;
      <input type="button" value="删除选择" class="btn" style="border-color: #FFFFFF;" onClick = 'return del(myshopcar);'>
&nbsp;&nbsp;    </td>
    <td height="25" align="center" valign="middle"><input id="cont" name="cont" type="button" class="btn" value="继续购物" onclick="return conshop(myshopcar)" /></td>
    <td height="25" align="center" valign="middle"><input id="uid" name="uid" type="hidden" value="<?php echo $_SESSION['member'];?>
" ><input id="settle" name="settle" type="button" class="btn" value="去收银台" onclick="return formset(form)" /></td>
    <td height="25" colspan="2" align="right" valign="middle"><div id='sum'>共计：<?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
&nbsp;元</div></td>
    </tr>
</form>
</table>
<?php }
}
