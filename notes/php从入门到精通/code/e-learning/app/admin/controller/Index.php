<?php

namespace app\admin\controller;
use app\admin\controller\Common;
use app\admin\validate\AdminUsers;
use app\admin\model\AdminUsers as _AdminUsers;
use think\facade\Db;
use think\facade\View;
class Index extends Common
{
    /*** 后台首页 ***/
	public function index(){
        $admin_users = new _AdminUsers;
		$info = $admin_users->where('id',session('admin_user_id'))->field('lastlogintime,lastloginip')->find();
		View::assign('info',$info);
	    return view();
	}
	
	/***  账号管理 ***/
	public function account()
	{	
		return view();	
	}
	
	/***  保存账号 ***/
	public function saveAccount()
	{
	   if(request()->isAjax()){						
			$post = input('post.');			         				
			// 验证表单
		    $validate = new AdminUsers();
			if(!$validate->scene('edit')->check($post)){  
				$res['status'] = false;
				$res['msg'] = $validate->getError(); 
				return json($res);               
			}
			$data = array(
			    'id' => session('admin_user_id'),
				'username' => $post['username'],
				'password' => md5($post['password']), 
			);
            $admin_users = new _AdminUsers;
			$result = $admin_users->update($data);
			if($result){
			    session('admin_user_id', null);
                session('admin_user_name', null);
				$res['status'] = true;
				$res['msg'] = '保存成功，请重新登录！';
			}else{
				$res['status'] = false;
				$res['msg'] = '保存失败！';
			}			
        }else{
		    $res['status'] = false;
            $res['msg'] = '请求错误~';
		}
		return json($res);	
	}
	
	/*** 会员列表 ***/
	public function member_list(){
	    
		$username = input('username');
		if($username){
		   $where[] = array('username','like','%'.$username.'%');
		   View::assign('username',$username);
		}else{
		   $where = [];
		}
		$datas = Db::name('member')->where($where)->order('id desc')->paginate(15);
		View::assign('datas',$datas);
		View::assign('totalCount',Db::name('member')->where($where)->count());
		
		View::assign('empty','<div class="empty">暂无数据</div>');
		View::assign('nav','member');
		
	    return view();
	}
	
	
}
