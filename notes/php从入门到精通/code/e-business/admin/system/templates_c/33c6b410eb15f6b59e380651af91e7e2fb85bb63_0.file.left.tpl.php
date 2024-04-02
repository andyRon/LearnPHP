<?php
/* Smarty version 4.3.1, created on 2023-06-15 14:11:25
  from 'E:\wamp\www\TM\sl\25\admin\system\templates\left.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648aab8d109ff4_02258085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33c6b410eb15f6b59e380651af91e7e2fb85bb63' => 
    array (
      0 => 'E:\\wamp\\www\\TM\\sl\\25\\admin\\system\\templates\\left.tpl',
      1 => 1686795552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648aab8d109ff4_02258085 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="css/left.css" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 type="text/javascript" src="js/left.js"><?php echo '</script'; ?>
>
<table width="190" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="right">
<div id="type" align="center" onclick="javascript:change(one,type);">类别管理</div>
<div id="one">
<div id="addtype" align="center"><a href="addtype.php" target="mainFrame" id="menu">添加类别</a></div>
<div id="showtype" align="center"><a href="showtype.php" target="mainFrame" id="menu">查看类别</a></div>
</div>
<div id="commo" align="center" onclick="change(two,commo)">商品管理</div>
<div id="two" style="display:none;">
<div id="addcommo" align="center"><a href="addcommo.php" target="mainFrame" id="menu">添加商品</a></div>
<div id="showcommo" align="center"><a href="showcommo.php" target="mainFrame" id="menu">查看商品</a></div>
<div id="showform" align="center"><a href="showform.php" target="mainFrame" id="menu">查看订单</a></div>
</div>

<div id="user" align="center" onclick="change(three,user)">用户管理</div>
<div id="three" style="display:none;">
<div id="manager" align="center"><a href="admin.php" target="mainFrame" id="menu">管理员管理</a></div>
<div id="member" align="center"><a href="member.php" target="mainFrame" id="menu">会员管理</a></div>
</div>


<div id="public" align="center" onclick="change(four,public)">公告管理</div>
<div id="four" style="display:none;">
<div id="addpublic" align="center"><a href="addpublic.php" target="mainFrame" id="menu">添加公告</a></div>
<div id="showpublic" align="center"><a href="showpub.php" target="mainFrame" id="menu">查看公告</a></div>
</div>


<div id="frelink" align="center" onclick="change(five,frelink)">友情链接</div>
<div id="five" style="display:none;">
<div id="addlinks" align="center"><a href="links.php" target="mainFrame" id="menu">添加链接</a></div>
<div id="showlinks" align="center"><a href="showlinks.php" target="mainFrame" id="menu">查看链接</a></div>
</div>

</td>
  </tr>
</table>
<?php }
}
