<?php
session_start();				//初始化SESSION变量
class chkinput{					//定义类
	var $name;					//定义成员变量
   	var $pwd;
   	function __construct($x,$y){	//定义构造方法
    	$this->name=$x;		    //为成员变量赋值
     	$this->pwd=$y;
    }
   	function checkinput(){		//定义方法
     	include "conn/conn.php";	//连接数据库
     	$sql=mysqli_query($conn,"select * from tb_user where user='".$this->name."'");	//执行查询
     	$info=mysqli_fetch_array($sql);	//获取查询结果
     	if($info==false){			//判断如果返回结果为空
          	echo "<script>alert('不存在此会员！');history.back();</script>";
          	exit;
       	}else{
          	if($info['password']==$this->pwd){	//判断如果密码相同
			 	$_SESSION['admin_name']=$this->name;	//则将该用户名存储到SESSION变量中
             		echo "<script>alert('恭喜您，登录成功！');window.location.href='index.php';</script>";
            	}else{
             		echo "<script>alert('密码输入错误！');history.back();</script>";
             		exit;
           	}
      	}
   	}
}
$obj=new chkinput(trim($_POST['name']),trim(md5($_POST['pwd'])));	//实例化类
$obj->checkinput();												//调用方法
?>
