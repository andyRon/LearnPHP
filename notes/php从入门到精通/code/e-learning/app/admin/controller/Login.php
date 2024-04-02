<?php

namespace app\admin\controller;
use app\BaseController;
use think\Controller;
use app\admin\model\AdminUsers;

class Login extends BaseController
{
    public function index()
    {
        return view();
    }
	
	public function check()
    { 
        if(request()->isAjax()){
			if(!captcha_check(input('code'))){
			    $res['status'] = false;
                $res['msg'] = '验证码错误~';
			}else{
				$admin = new AdminUsers();
				$num = $admin->login(input('post.')); 
				if($num==1){
					$res['status'] = false;
					$res['msg'] = '用户不存在！';
				}
				if($num==2){
					$res['status'] = true;
					$res['msg'] = '../Index/index';
				}
				if($num==3){
					$res['status'] = false;
					$res['msg'] = '密码错误！';
				}
			}
        }else{
		    $res['status'] = false;
            $res['msg'] = '请求错误~';
		}
		return json($res);
    }
	
	public function logout(){
        session('admin_user_id',null); 
		session('admin_user_name',null); 
        $this->success('退出系统成功！',url('login/index'));
    }

}