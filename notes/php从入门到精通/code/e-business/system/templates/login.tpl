{if $member=="游客"}
<table width="210" height="208" border="0" cellpadding="0" cellspacing="0" background="images/shop_04.gif">
<form id="login" name="login" method="post" action="#" onsubmit="return lg(this)">
  <tr>
    <td width="64" height="35">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" align="right">用户名：</td>
    <td colspan="2"><input name="name" type="text" id="name"  onmouseover="this.style.backgroundColor='#ffffff'" onmouseout="this.style.backgroundColor='#e8f4ff'" size="15" /></td>
  </tr>
  <tr>
    <td height="25" align="right">密码：</td>
    <td colspan="2"><input name="password" type="password" id="password"  onmouseover="this.style.backgroundColor='#ffffff'" onmouseout="this.style.backgroundColor='#e8f4ff'" size="15" /></td>
  </tr>
  <tr>
    <td height="25" align="right">验证码：</td>
    <td colspan="2"><input name="check" type="text" id="check"  onmouseover="this.style.backgroundColor='#ffffff'" onmouseout="this.style.backgroundColor='#e8f4ff'" size="10" /></td>
  </tr>
  <tr>
    <td height="30"><input name="check2" type="hidden" value="" /></td>
    <td width="44" onclick="javascript:code(login);"><script>yzm(login);</script></td>
    <td width="80"><a onclick="javascript:code(login)" style=" cursor:hand">换一张</a></td>
  </tr>
  <tr>
    <td height="25" colspan="3" align="center"><input type="image" src="images/login.JPG"></td>
  </tr>
  <tr>
    <td colspan="3" align="center"><a href="#" id="login" onclick="reg()"><img src="images/check.JPG" width="59" height="23" border="0" /></a>&nbsp;<a id="login" href="#" onclick="found()"><img src="images/pass.JPG" width="59" height="23" border="0" /></a><strong></td>
    </tr>
  </form>
</table>
{else}
{include file='info.tpl'}
{/if}