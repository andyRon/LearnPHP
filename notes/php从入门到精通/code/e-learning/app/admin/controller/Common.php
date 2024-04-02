<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use app\BaseController;
class Common extends BaseController
{
    public function initialize(){
        if(!session('admin_user_id') || !session('admin_user_name')){
           $this->error('您尚未登录系统',url('login/index')); 
        }        
    }
}