<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/style.css" rel="stylesheet" type="text/css">
<title>会员注册</title>
</head>
<body>
<script>
function register(){
if(myform.name.value=="")
{alert("会员名称不能为空！！");myform.name.focus();return false;}
if(myform.pwd.value=="")
{alert("会员密码不能为空！！");myform.pwd.focus();return false;}
}
</script>
  <form name="myform" method="post" action="register_ok.php">
    <table width="800" height="314" border="0" cellpadding="0"
	cellspacing="0">
      <tr>
        <td valign="top" background="images/reg.gif"><table width="778" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="200" height="255">&nbsp;</td>
              <td width="88">&nbsp;</td>
              <td width="125">&nbsp;</td>
              <td width="332">&nbsp;</td>
            </tr>
            <tr>
              <td height="31">&nbsp;</td>
              <td align="center">注册名称：</td>
              <td><input name="name" type="text" id="name" size="16"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="35">&nbsp;</td>
              <td align="center">注册密码：</td>
              <td><input name="pwd" type="password" id="pwd" size="16"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="34">&nbsp;</td>
              <td>&nbsp;</td>
              <td align="right"><input name="imageField" type="image"
					src="images/reg.jpg" width="87" height="24" border="0"
					onClick="return register();">
                </a>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="87">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table></td>
      </tr>
    </table>
  </form>
</body>
</html>
