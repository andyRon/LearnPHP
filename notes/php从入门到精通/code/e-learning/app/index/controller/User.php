<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use app\index\validate\Member as MemberValidate;
use app\index\model\Member;
use think\facade\View;
use think\facade\Db;
use app\BaseController;
class User extends BaseController
{
	
	public function initialize()
	{
        if(!session('user_id') || !session('username')){
           $this->error('请您先登录！',url('Index/index')); 
        }else{
		   $request = request();
           $controller = $request->controller();
           $action = $request->action();
		   View::assign('controller',$controller);
           View::assign('action',$action);
		}     
    }
	
	//账号管理
	public function account()
	{	
	    View::assign('nav','account');
		return view();	
	}
	//保存用户
	public function saveAccount()
	{
	   if(request()->isAjax()){						
			$post = input('post.');  			         				
			// 验证表单
            $validate = new MemberValidate();
			if(!$validate->scene('edit')->check($post)){  
				$res['status'] = false;
				$res['msg'] = $validate->getError(); 
				return json($res);               
			}
			$data = array(
			    'id' => $post['id'],
				'username' => $post['username'],
				'password' => md5(sha1($post['password'])), 
			);
			$member = new Member;
			$result = $member->update($data);
			if($result){
		        session('username',$post['username']);
				$res['status'] = true;
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
	
	//我的下载
	public function download()
	{	
	    $user_id = session('user_id');
		$datas = Db::name('download_record')->where('user_id',$user_id)->order('addtime desc,id desc')->paginate();
		View::assign('datas',$datas);
		View::assign('nav','download');
		return view();	
	}
	
	/*** 单个下载删除 ***/
	public function del_download()
	{
	    if(request()->isAjax()){
			if(Db::name('download_record')->where('id',input('id'))->delete()){
				$res['status'] = true;
                $res['msg'] = '删除成功';
			}else{
				$res['status'] = false;
                $res['msg'] = '删除失败';
			}
		}else{
		    $res['status'] = false;
            $res['msg'] = '请求错误~';
		}
		return json($res);
    }
	
	/*** 多个下载删除 ***/
	public function del_downloads()
	{  
	    if(request()->isAjax()){
		    $ids = input('post.ids/a');
			if(empty($ids)){
			   $res['status'] = false;
               $res['msg'] = '参数错误';
			}else{
			   if(Db::name('download_record')->where('id','in',$ids)->delete()){
				   $res['status'] = true;
				   $res['msg'] = '删除成功';
			   }else{
				   $res['status'] = false;
				   $res['msg'] = '删除失败';
			   }
			}
		}else{
		    $res['status'] = false;
            $res['msg'] = '请求错误~';
		}
		return json($res);
    }
	
	//观看记录
	public function view_record()
	{	
	    $user_id = session('user_id');
		$datas = Db::name('learn_record')->where('user_id',$user_id)->order('addtime desc,id desc')->paginate();
		View::assign('datas',$datas);
		View::assign('nav','viewRecord');
		return view();	
	}
	
	/*** 单个记录删除 ***/
	public function del_record()
	{
	    if(request()->isAjax()){
			if(Db::name('learn_record')->where('id',input('id'))->delete()){
				$res['status'] = true;
                $res['msg'] = '删除成功';
			}else{
				$res['status'] = false;
                $res['msg'] = '删除失败';
			}
		}else{
		    $res['status'] = false;
            $res['msg'] = '请求错误~';
		}
		return json($res);
    }
	
	/*** 多个记录删除 ***/
	public function del_records()
	{  
	    if(request()->isAjax()){
		    $ids = input('post.ids/a');
			if(empty($ids)){
			   $res['status'] = false;
               $res['msg'] = '参数错误';
			}else{
			   if(Db::name('learn_record')->where('id','in',$ids)->delete()){
				   $res['status'] = true;
				   $res['msg'] = '删除成功';
			   }else{
				   $res['status'] = false;
				   $res['msg'] = '删除失败';
			   }
			}
		}else{
		    $res['status'] = false;
            $res['msg'] = '请求错误~';
		}
		return json($res);
    }
		
}