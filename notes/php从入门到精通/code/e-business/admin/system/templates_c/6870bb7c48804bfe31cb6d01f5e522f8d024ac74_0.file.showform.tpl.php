<?php
/* Smarty version 4.3.1, created on 2023-06-15 14:11:25
  from 'E:\wamp\www\TM\sl\25\admin\system\templates\showform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648aab8d100208_56603831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6870bb7c48804bfe31cb6d01f5e522f8d024ac74' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\admin\\system\\templates\\showform.tpl',
      1 => 1686795741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648aab8d100208_56603831 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link href="css/table.css" rel="stylesheet" type="text/css">
</head>
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/shwform.js"><?php echo '</script'; ?>
>
<body>
<table width="785" border="0" align="left" cellpadding="0" cellspacing="0">
  <form id="shwfrm" name="shwfrm" method="post" action"#">
    <tr>
      <td height="25" align="center" valign="middle" class="first">删除</td>
      <td height="25" align="center" valign="middle" class="first">订单号</td>
      <td height="25" align="center" valign="middle" class="first">购买用户</td>
      <td height="25" align="center" valign="middle" class="first">接收人</td>
      <td height="25" align="center" valign="middle" class="first">消费金额</td>
      <td height="25" align="center" valign="middle" class="first">付款方式</td>
      <td height="25" align="center" valign="middle" class="first">送货方式</td>
      <td height="25" align="center" valign="middle" class="first">订单状态</td>
      <td height="25" align="center" valign="middle" class="first">查看</td>
      <td height="25" align="center" valign="middle" class="first">处理</td>
    </tr>
    <?php
$__section_for_id_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['formarr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_for_id_0_total = $__section_for_id_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_for_id'] = new Smarty_Variable(array());
if ($__section_for_id_0_total !== 0) {
for ($__section_for_id_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] = 0; $__section_for_id_0_iteration <= $__section_for_id_0_total; $__section_for_id_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']++){
?>
    <tr>
      <td height="25" align="center" valign="middle" class="left"><input id="chk" name="chk[]" type="checkbox" class="left" value="<?php echo $_smarty_tpl->tpl_vars['formarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] : null)]['id'];?>
" /></td>
      <td height="25" align="center" valign="middle" class="center"><?php echo $_smarty_tpl->tpl_vars['formarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] : null)]['formid'];?>
</td>
      <td height="25" align="center" valign="middle" class="center"><?php echo $_smarty_tpl->tpl_vars['formarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] : null)]['vendee'];?>
</td>
      <td height="25" align="center" valign="middle" class="center"><?php echo $_smarty_tpl->tpl_vars['formarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] : null)]['taker'];?>
</td>
      <td height="25" align="center" valign="middle" class="center"><?php echo $_smarty_tpl->tpl_vars['formarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] : null)]['total'];?>
</td>
      <td height="25" align="center" valign="middle" class="center"><?php echo $_smarty_tpl->tpl_vars['formarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] : null)]['pay_method'];?>
</td>
      <td height="25" align="center" valign="middle" class="center"><?php echo $_smarty_tpl->tpl_vars['formarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] : null)]['del_method'];?>
</td>
      <td height="25" align="center" valign="middle" class="center"><?php if ($_smarty_tpl->tpl_vars['formarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] : null)]['state'] == 0) {?>未处理<?php } elseif ($_smarty_tpl->tpl_vars['formarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] : null)]['state'] == 1) {?>已收款<?php } elseif ($_smarty_tpl->tpl_vars['formarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] : null)]['state'] == 2) {?>已发货<?php } elseif ($_smarty_tpl->tpl_vars['formarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] : null)]['state'] == 3) {?>已收货<?php }?></td>
      <td height="25" align="center" valign="middle" class="right"><input id="lookform" name="lookform[]" type="button" class="btn" value="查看" style="border-color:#ffffff; cursor:hand;" onclick="showforminfo(<?php echo $_smarty_tpl->tpl_vars['formarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] : null)]['id'];?>
)" /></td>
      <td height="25" align="center" valign="middle" class="right"><input id="deal" name="deal" type="button" value="请求处理" class="btn" style="border-color:#ffffff; width:100px; cursor: hand;" onclick="showme(<?php echo $_smarty_tpl->tpl_vars['formarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] : null)]['formid'];?>
)" /></td>
    </tr>
    <?php
}
}
?>
    <tr>
      <td height="30" colspan="10" align="left" valign="middle"><a href="#" onclick="return alldel(shwfrm);">全选</a> <a href="#" onclick="return overdel(shwfrm);">反选</a>&nbsp;&nbsp;
          <input type="submit" value="删除选择" class="btn" style="border-color: #FFFFFF;" onclick = 'return del(shwfrm)' />      </td>
    </tr>
	  </form>
    <tr>
      <td height="30" colspan="10" align="left" valign="middle"><div id="chdl" style="display:none;">
  <table width="525" border="0" align="center" cellpadding="0" cellspacing="0">
    <form id="changedeal" name="changedeal" method="post">
      <tr>
        <td height="25" colspan="6" align="center" valign="middle" class="first">订单处理</td>
      </tr>
      <tr>
        <td width="75" height="25" align="center" valign="middle" class="left">订单号：</td>
        <td width="100" height="25" align="center" valign="middle" class="center"><div id="formid">&nbsp;</div></td>
        <td width="100" height="25" align="center" valign="middle" class="center"><input id="acceptmon" name="acceptsend" type="radio" value="1" checked="checked" />已收款</td>
        <td width="100" height="25" align="center" valign="middle" class="center"><input id="sendwa" name="acceptsend" type="radio" value="2" />已发货</td>
        <td width="100" height="25" align="center" valign="middle" class="center"><input id="acceptwa" name="acceptsend" type="radio" value="3" />已收货</td>
        <td width="50" height="25" align="center" valign="middle" class="right"><input id="chg" name="chg" type="button" class="btn" value="修改" style="border-color:#FFFFFF;" onclick="return changeme(changedeal)" /></td>
      </tr>
    </form>
  </table>
</div>
</td>
    </tr>

</table>

</body>
</html>
<?php }
}
