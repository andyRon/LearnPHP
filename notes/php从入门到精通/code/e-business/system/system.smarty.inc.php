<?php
	require("libs/Smarty.class.php");			//包含模板文件
	class SmartyProject extends Smarty{		//定义类，继承模板类
		function __construct(){			//定义构造方法，配置Smarty模板
			parent::__construct();  //调用父类构造方法
			$this->setTemplateDir("./system/templates/");		//指定模板文件存储位置
			$this->setCompileDir("./system/templates_c/");	//指定编译文件存储位置
			$this->setConfigDir("./system/configs/");//指定配置文件存储位置
			$this->setCacheDir("./system/cache/"); //指定缓存文件存储位置
		}
	}
?>