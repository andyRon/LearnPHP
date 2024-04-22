<?php
/* Smarty version 4.5.2, created on 2024-04-06 04:26:05
  from '/Users/andyron/myfield/github/LearnPHP/notes/php从入门到精通/code/e-business/system/templates/newhot.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6610ceddc32b08_04159373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b42796cb490541101f342374fe37e7ac0261b8b' => 
    array (
      0 => '/Users/andyron/myfield/github/LearnPHP/notes/php从入门到精通/code/e-business/system/templates/newhot.tpl',
      1 => 1698390855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6610ceddc32b08_04159373 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/andyron/myfield/github/LearnPHP/notes/php从入门到精通/code/e-business/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),));
?>
<link rel="stylesheet" href="css/newhot.css" />
<link href="css/top.css" rel="stylesheet" type="text/css" />
<link href="css/nominate.css" rel="stylesheet" type="text/css" />
<link href="css/link.css" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/showcommo.js"><?php echo '</script'; ?>
>
<table width="643" border="0" cellpadding="0" cellspacing="0" style=" border: 3px solid #f0f0f0;" >
	<tr>
		<td colspan="2" height="2"></td>
	</tr>
	<tr>
	  <td width="321" height="33" align="center" background="images/shop_07.gif"><div class="new"><a href="?page_type=nom" class="top"><img src="images/more.JPG" width="39" height="18" border="0" /></a></div>
	 </td>
	  <td width="322" height="33" align="right" background="images/shop_14.gif"><div class="hot"><a href="?page_type=hot" class="top"><img src="images/more.JPG" width="39" height="18" border="0" /></a></div>
	  &nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
	<tr>
	  <td align="center" valign="top" style="border-right: 1px solid #f0f0f0;"><table width="295" height="307" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr><?php echo smarty_function_counter(array('start'=>1,'skip'=>1,'direction'=>'up','print'=>false,'assign'=>'count'),$_smarty_tpl);?>
 <?php
$__section_new_id_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['newarr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_new_id_2_total = $__section_new_id_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_new_id'] = new Smarty_Variable(array());
if ($__section_new_id_2_total !== 0) {
for ($__section_new_id_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index'] = 0; $__section_new_id_2_iteration <= $__section_new_id_2_total; $__section_new_id_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index']++){
?>
          <td align="left" valign="top"><table width="150" height="150" align="left" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="100" align="center" valign="middle"><a style="cursor:hand;" onclick=""><img src="<?php echo $_smarty_tpl->tpl_vars['newarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index'] : null)]['pics'];?>
" width="100" height="80" alt="<?php echo $_smarty_tpl->tpl_vars['newarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index'] : null)]['name'];?>
" style="border:1px solid #f0f0f0;" onclick="openshowcommo(<?php echo $_smarty_tpl->tpl_vars['newarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index'] : null)]['id'];?>
)" /></a></td>
                </tr>
                <tr>
                  <td height="17" align="center" valign="middle"><?php echo $_smarty_tpl->tpl_vars['newarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index'] : null)]['name'];?>
</td>
                </tr>
                <tr>
                  <td height="17" align="center" valign="middle">市场价：<?php echo $_smarty_tpl->tpl_vars['newarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index'] : null)]['m_price'];?>
&nbsp;元</td>
                </tr>
                <tr>
                  <td height="16" align="center" valign="middle">会员价：<?php echo $_smarty_tpl->tpl_vars['newarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new_id']->value['index'] : null)]['v_price'];?>
&nbsp;元</td>
                </tr>
            </table></td>
			<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

          <?php if ($_smarty_tpl->tpl_vars['count']->value % 2 != 0) {?> </tr>
	    <tr> <?php }?>
	      <?php
}
}
?> </tr>
      </table></td>
        
		<td align="center" valign="top" style="border-left: 1px solid #f0f0f0;"><table width="295" height="307" align="center" border="0" cellpadding="0" cellspacing="0">
          <tr> <?php echo smarty_function_counter(array('start'=>1,'skip'=>1,'direction'=>'up','print'=>false,'assign'=>'counts'),$_smarty_tpl);
$__section_hot_id_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['hotarr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_hot_id_3_total = $__section_hot_id_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_hot_id'] = new Smarty_Variable(array());
if ($__section_hot_id_3_total !== 0) {
for ($__section_hot_id_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index'] = 0; $__section_hot_id_3_iteration <= $__section_hot_id_3_total; $__section_hot_id_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index']++){
?>
            <td align="left" valign="top"><table width="150" height="150" align="left" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="100" align="center" valign="middle"><a style="cursor:hand;" onclick=""><img src="<?php echo $_smarty_tpl->tpl_vars['hotarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index'] : null)]['pics'];?>
" width="100" height="80" alt="<?php echo $_smarty_tpl->tpl_vars['hotarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index'] : null)]['name'];?>
" style="border:1px solid #f0f0f0;" onclick="openshowcommo(<?php echo $_smarty_tpl->tpl_vars['hotarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index'] : null)]['id'];?>
)" /></a></td>
                  </tr>
                  <tr>
                    <td height="17" align="center" valign="middle"><?php echo $_smarty_tpl->tpl_vars['hotarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index'] : null)]['name'];?>
</td>
                  </tr>
                  <tr>
                    <td height="17" align="center" valign="middle">市场价：<?php echo $_smarty_tpl->tpl_vars['hotarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index'] : null)]['m_price'];?>
&nbsp;元</td>
                  </tr>
                  <tr>
                    <td height="16" align="center" valign="middle">会员价：<?php echo $_smarty_tpl->tpl_vars['hotarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index'] : null)]['v_price'];?>
&nbsp;元</td>
                  </tr>
              </table></td>
           <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

          <?php if ($_smarty_tpl->tpl_vars['counts']->value % 2 != 0) {?></tr>
		  <tr> <?php }?>
		    <?php
}
}
?> </tr>
        </table></td>
</tr>
</table>
<table width="643" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="6" width="636" height="33" align="right" valign="middle"><img src="images/shop_10.gif" width="643" height="33" border="0" usemap="#Map" /></td>
		<td rowspan="3" width="7" height="238">&nbsp;</td>
	</tr>
	<tr>
    	<td width="23" height="185">&nbsp;</td>
       <?php
$__section_nom_id_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['nomarr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_nom_id_4_total = $__section_nom_id_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_nom_id'] = new Smarty_Variable(array());
if ($__section_nom_id_4_total !== 0) {
for ($__section_nom_id_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_nom_id']->value['index'] = 0; $__section_nom_id_4_iteration <= $__section_nom_id_4_total; $__section_nom_id_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_nom_id']->value['index']++){
?> 
	  <td width="145" height="185" align="left" valign="top">
      
       	  <table width="145" border="0" cellpadding="0" cellspacing="0" >
<tr>
               	  <td height="100" align="center" valign="middle"><img src="<?php echo $_smarty_tpl->tpl_vars['nomarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nom_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nom_id']->value['index'] : null)]['pics'];?>
" width="100" height="80" alt="<?php echo $_smarty_tpl->tpl_vars['nomarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nom_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nom_id']->value['index'] : null)]['name'];?>
" style="border: 1px solid #f0f0f0;" ></td>
            </tr>
                <tr>
               	  <td height="17" align="center" valign="middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['nomarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nom_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nom_id']->value['index'] : null)]['name'];?>
</td>
            </tr>
                <tr>
               	  <td height="17" align="center" valign="middle">市场价：<?php echo $_smarty_tpl->tpl_vars['nomarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nom_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nom_id']->value['index'] : null)]['m_price'];?>
&nbsp;元</td>
            </tr>
                <tr>
                	<td height="19" align="center" valign="middle">会员价：<?php echo $_smarty_tpl->tpl_vars['nomarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nom_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nom_id']->value['index'] : null)]['v_price'];?>
&nbsp;元</td>
            </tr>
                <tr>
                	<td height="32" align="center" valign="middle"><input id="showinfo" name="showinfo" type="button" value="" class="showinfo" onclick="openshowcommo(<?php echo $_smarty_tpl->tpl_vars['nomarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nom_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nom_id']->value['index'] : null)]['id'];?>
)"/>&nbsp;<input id="buy" name="buy" type="button" value="" class="buy" onclick="return buycommo(<?php echo $_smarty_tpl->tpl_vars['nomarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nom_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nom_id']->value['index'] : null)]['id'];?>
)" /></td>
            </tr>
       	</table>
      </td>
      <?php
}
}
?>
        <td width="33" height="185">&nbsp;</td>
  </tr>
	<tr>
		<td colspan="6" width="636" height="14">&nbsp;</td>
	</tr>
</table>

<map name="Map" id="Map">
<area shape="rect" coords="585,8,635,27" href="?page_type=new" class="lk" />
</map><?php }
}
