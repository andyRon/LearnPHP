<?php

namespace app\admin\controller;
use app\admin\controller\Common;
use app\admin\model\Course as _Course;
use app\admin\validate\Course as CourseValidate;
use think\facade\Db;
use think\facade\View;
class Course extends Common
{
    /*** 课程列表 ***/
	public function index(){
	   
		$datas = Db::name('course')->order('sort desc,id')->paginate(10);
        View::assign('datas',$datas);
		View::assign('totalCount',Db::name('course')->count());
		
		View::assign('nav','course');
		
	    return view();
	}
	
	/***  添加or编辑课程 ***/
	public function add_course(){
   		
		$id = input('id');
		if($id){		   
		   $info = Db::name('course')->find($id);
		   View::assign('info',$info);
		}
		View::assign('nav','course');
	    return view();
	}
	
	/***  保存课程 ***/
	public function save_course()
	{
        if(request()->isAjax()){
            $data = input('post.');           				
			// 验证表单
            $validate = new CourseValidate();
            if(!$validate->scene('add')->check($data)){
			    $res['status'] = false;
                $res['msg'] = $validate->getError(); 
				return json($res);               
            }
            $course = new _Course;
			if($data['id']){
			    $result = $course->update($data);
			}else{
			    $data['addtime'] = time();
			    $result = $course->save($data);
			}
            if($result){
                $res['status'] = true;
                $res['msg'] = '保存成功';
            }else{
			    $res['status'] = false;
                $res['msg'] = '保存失败';
            }
        }else{
		    $res['status'] = false;
            $res['msg'] = '请求错误~';
		}
		return json($res);    
    }
	
	/*** 单个课程删除 ***/
	public function del_course()
	{
	    if(request()->isAjax()){
		   $id = input('id');
		   $resourceTotal = Db::name('resource')->where('course_id',$id)->count();
		   if($resourceTotal > 0){
		      $res['status'] = false;
			  $res['msg'] = '此课程下含有资源，暂不能删除！';
		   }else{
			  if(_Course::destroy($id)){
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
	
	/*** 会员列表 ***/
	public function member_list(){
	   
		$datas = Db::name('member')->order('id desc')->paginate(15);
		View::assign('datas',$datas);
		View::assign('totalCount',Db::name('member')->count());
		
		View::assign('empty','<div class="empty">暂无数据</div>');
		View::assign('nav','member');
		
	    return view();
	}
	
	
}
