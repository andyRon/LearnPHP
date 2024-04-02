<?php

namespace app\admin\controller;
use app\admin\controller\Common;
use app\admin\model\Resource as _Resource;
use app\admin\validate\Resource as ResourceValidate;
use think\facade\View;
use think\facade\Db;
class Resource extends Common
{
    /*** 资源列表 ***/
	public function index(){
	   
		$where = [];
		$course_id = input('course_id');
		if($course_id){
		   $where['course_id'] = $course_id;
		   View::assign('course_id',$course_id);
		}
		$title = input('title');
		if($title){
		   $where[] = array('title','like','%'.$title.'%');
		   View::assign('title',$title);
		}
		$datas = Db::name('resource')->alias('r')->join('tb_course c','c.id=r.course_id')->field('r.*,c.name')->where($where)->order('sort desc,id desc')->paginate(15);
		View::assign('datas',$datas);
		View::assign('totalCount',Db::name('resource')->where($where)->count());
		
		$courses = Db::name('course')->field('id,name')->order('sort desc,id')->select();
		View::assign('courses',$courses);
		
		View::assign('nav','resource');
		
	    return view();
	}
	
	/***  添加or编辑资源 ***/
	public function add_resource(){
   		
		$id = input('id');
		if($id){		   
		   $info = Db::name('resource')->find($id);
		   View::assign('info',$info);
		}
		$courses = Db::name('course')->field('id,name')->order('sort desc,id')->select();
		View::assign('courses',$courses);
		View::assign('nav','resource');
	    return view();
	}
	
	/***  保存课程 ***/
	public function save_resource()
	{
        if(request()->isAjax()){
            $data = input('post.');           				
			// 验证表单
			$validate = new ResourceValidate();
            if(!$validate->scene('add')->check($data)){  
			    $res['status'] = false;
                $res['msg'] = $validate->getError(); 
				return json($res);               
            }
            $resource = new _Resource;
			if($data['id']){
			    $result = $resource->update($data);
			}else{
			    $data['addtime'] = time();
			    $result = $resource->save($data);
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
	
	/*** 单个资源删除 ***/
	public function del_resource()
	{
	    if(request()->isAjax()){
			if(_Resource::destroy(input('id'))){
			    //删除观看记录
				Db::name('learn_record')->where('resource_id',input('id'))->delete();
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
	
	/*** 多个资源删除 ***/
	public function del_resources()
	{  
	    if(request()->isAjax()){
		    $ids = input('post.ids/a');
			if(empty($ids)){
			   $res['status'] = false;
               $res['msg'] = '参数错误';
			}else{
			   if(_Resource::destroy($ids)){
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
