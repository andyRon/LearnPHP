<?php
/* Smarty version 4.3.1, created on 2023-08-21 10:56:25
  from 'E:\wamp\www\TM\sl\25\system\templates\allnew.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64e2d2599b73d7_35125559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '169e1497b26f7393399aef917fb8023f7ccd4ab2' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\system\\templates\\allnew.tpl',
      1 => 1294473154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e2d2599b73d7_35125559 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="636" border="0" align="center" cellspacing="0" cellpadding="0">
  <tr>
    <td height="33" align="left" valign="middle"><img src="images/shop_10.gif" width="643" height="33" /></td>
  </tr>
  <tr>
    <td height="132" align="left" valign="middle"> <?php
$__section_new_id_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['newarr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_new_id_0_total = $__section_new_id_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_new_id'] = new Smarty_Variable(array());
if ($__section_new_id_0_total !== 0) {
for ($__section_new_id_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index'] = 0; $__section_new_id_0_iteration <= $__section_new_id_0_total; $__section_new_id_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index']++){
?>
      <table width="636" height="134" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="145" rowspan="5" align="center" valign="middle"><img src="<?php echo $_smarty_tpl->tpl_vars['newarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index'] : null)]['pics'];?>
" width="90" height="100" alt="<?php echo $_smarty_tpl->tpl_vars['newarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index'] : null)]['name'];?>
" style="border: 1px solid #f0f0f0;" /></td>
            <td height="35">商品名称：<?php echo $_smarty_tpl->tpl_vars['newarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index'] : null)]['name'];?>
</td>
            <td width="156" height="35">商品类别：<?php echo $_smarty_tpl->tpl_vars['newarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index'] : null)]['class'];?>
</td>
            <td width="157">商品型号：<?php echo $_smarty_tpl->tpl_vars['newarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index'] : null)]['model'];?>
</td>
          </tr>
          <tr>
            <td height="23">商品品牌：<?php echo $_smarty_tpl->tpl_vars['newarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index'] : null)]['brand'];?>
</td>
            <td height="23" colspan="2">商品产地：<?php echo $_smarty_tpl->tpl_vars['newarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index'] : null)]['area'];?>
</td>
          </tr>
          <tr>
            <td width="178" height="23">剩余数量：<?php echo $_smarty_tpl->tpl_vars['newarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index'] : null)]['stocks'];?>
</td>
            <td colspan="2">销售数量：<?php echo $_smarty_tpl->tpl_vars['newarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index'] : null)]['sell'];?>
</td>
          </tr>
          <tr>
            <td height="23">市场价：<font color="red"><?php echo $_smarty_tpl->tpl_vars['newarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index'] : null)]['m_price'];?>
&nbsp;元</font></td>
            <td height="23" colspan="2">上市日期：<?php echo $_smarty_tpl->tpl_vars['newarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index'] : null)]['addtime'];?>
</td>
          </tr>
          <tr>
            <td height="30">会员价格：<font color="#FF0000"><?php echo $_smarty_tpl->tpl_vars['newarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index'] : null)]['v_price'];?>
&nbsp;元</font></td>
            <td height="30" colspan="2" align="center" valign="middle"><input id="allshow" name="allshow" type="button" value="" class="showinfo" onclick="openshowcommo(<?php echo $_smarty_tpl->tpl_vars['newarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index'] : null)]['id'];?>
)"  />
              &nbsp;
              <input id="buy" name="buy" type="button" value="" class="buy" onclick="return buycommo(<?php echo $_smarty_tpl->tpl_vars['newarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index'] : null)]['id'];?>
)" /></td>
          </tr>
        </table>
      <hr style="border: 1px solid #f0f0f0;" />
      <?php
}
}
?> </td>
  </tr>
  <tr>
    <td height="25"><?php echo $_smarty_tpl->tpl_vars['rst1_page']->value;?>
</td>
  </tr>
</table>
<?php }
}
