<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>综合运用数组函数-实现多文件上传</title>
    <style type="text/css">
        <!--
        body {
            background-color: #F0F0F0;
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
        }

        .STYLE1 {
            font-size: 13px;
            font-weight: bold;
            width: 188px;
            height: 30px;
            text-align: right;
        }

        .STYLE2 {
            font-size: 12px;
            color: #FF0000;
        }

        a:link {
            text-decoration: none;
        }

        a:visited {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        a:active {
            text-decoration: none;
        }

        -->
    </style>
</head>

<body>
<table width="725" border="0" align="center" cellpadding="0" cellspacing="0">

    <tr>
        <td width="662" align="center" valign="top">
            <table width="578" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td height="20" colspan="2" align="center" bgcolor="#FFFFFF">文件路径（5个文件以内任意上传）</td>
                </tr>
                <form action="index_ok.php" method="post" enctype="multipart/form-data" name="form1">
                    <tr>
                        <td class="STYLE1">内容1：</td>
                        <td><input name="picture[]" type="file" id="picture[]" size="30"></td>
                    </tr>
                    <tr>
                        <td class="STYLE1">内容2：</td>
                        <td><input name="picture[]" type="file" id="picture[]" size="30"></td>
                    </tr>
                    <tr>
                        <td class="STYLE1">内容3：</td>
                        <td><input name="picture[]" type="file" id="picture[]" size="30"></td>
                    </tr>
                    <tr>
                        <td class="STYLE1">内容4：</td>
                        <td><input name="picture[]" type="file" id="picture[]" size="30"></td>
                    </tr>
                    <tr>
                        <td class="STYLE1">内容5：</td>
                        <td><input name="picture[]" type="file" id="picture[]" size="30"></td>
                    </tr>
                    <tr>
                        <td height="50">&nbsp;</td>
                        <td><input type="image" name="imageField" src="images/02-03 (3).jpg"></td>
                    </tr>
                </form>
            </table>
        </td>
    </tr>

</table>
<p>&nbsp;</p>
</body>
</html>
