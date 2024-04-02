<?php
require("../Smarty/Smarty.class.php");		//调用Smarty文件
class SmartyProject extends Smarty{	//定义类，继承Smarty父类
	function __construct(){			//定义构造方法，配置Smarty模板
		parent::__construct();  //调用父类构造方法
		$this->setTemplateDir("./");		//指定模板文件存储在根目录下
		$this->setCompileDir("../Smarty/templates_c/");	//指定编译目录
		$this->setConfigDir("../Smarty/configs/");//指定配置目录
		$this->setCacheDir("../Smarty/cache/"); //指定缓存目录
    }
} 
?>