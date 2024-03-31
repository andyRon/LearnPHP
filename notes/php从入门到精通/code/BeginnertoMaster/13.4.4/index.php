<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>多文件上传</title>
    <style type="text/css">
        table{
            border-collapse: collapse;
        }
        td{
            border: 1px solid #000000;
        }
    </style>
</head>
<body>
请选择要上传的文件
<form action="" method="post" enctype="multipart/form-data">
    <table id="up_table" border="1">
        <tr>
            <td>上传文件：</td>
            <td><input name="u_file[]" type="file"></td>
        </tr>
        <tr>
            <td>上传文件：</td>
            <td><input name="u_file[]" type="file"></td>
        </tr>
        <tr>
            <td>上传文件：</td>
            <td><input name="u_file[]" type="file"></td>
        </tr>
        <tr>
            <td>上传文件：</td>
            <td><input name="u_file[]" type="file"></td>
        </tr>
        <tr><td colspan="2"><input type="submit" value="上传" /></td></tr>
    </table>
</form>
<?php
print_r($_FILES);
//if(!empty($_FILES['u_file']['name'])){
//	$file_name = $_FILES['u_file']['name'];
//	$file_tmp_name = $_FILES['u_file']['tmp_name'];
//	for($i = 0; $i < count($file_name); $i++){
//		if($file_name[$i] != ''){
//			move_uploaded_file($file_tmp_name[$i],$i.$file_name[$i]);
//			echo '文件'.$file_name[$i].'上传成功。更名为'.$i.$file_name[$i].'<br>';
//		}
//	}
//}
?>
</body>
</html>
