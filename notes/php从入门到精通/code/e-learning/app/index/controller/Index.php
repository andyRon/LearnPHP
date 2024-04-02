<?php
declare (strict_types = 1);
namespace app\index\controller;
use think\Controller;
use think\Request;
use app\index\model\LearnRecord;
use app\index\model\DownloadRecord;
use app\index\model\Member;
use app\index\validate\Member as MemberValidate;
use think\facade\Db;
use think\facade\View;
use app\BaseController;
class Index extends BaseController
{
	
	public function initialize(){
        // 初始化方法
        $request = request();  // 获取request请求对象
        $controller = $request->controller(); // 获取当前控制器名
        $action = $request->action(); // 获取当前操作名
		View::assign('controller',$controller); // 模板变量赋值
        View::assign('action',$action); // 模板变量赋值
    }
	
	//首页
    public function index()
    {
	   //精彩课程
	   $datas = Db::name('course')->where('status',1)->order('sort desc,id desc ')->select(); // 获取所有状态正常的课程
	   View::assign('datas',$datas); // 模板变量赋值
	   $resourceTotal = Db::name('resource')->where('status',1)->count(); // 获取所有状态正常的资源
	   View::assign('resourceTotal',$resourceTotal); // 模板变量赋值
	   return view(); // 渲染模板
    }
	
	//列表
    public function lists()
    {	   
	   //课程id
	   $id = input('id'); // 接收ID
	   if(empty($id)){  // 判断ID是否为空
		   $this->error('参数错误');
	   }
		// 根据资源ID查找资源信息
	   $datas = Db::name('resource')->where('course_id',$id)->where('status',1)->order('sort desc,id desc')->select();
	   View::assign('datas',$datas); // 模板赋值
	   return view(); // 渲染模板
    }
	
	//详情页
    public function view(){

		$id = input('id');
	    $result = checkRoot($id);
	    if(!$result){
		   $this->error('请您先登录！');
	    }

		$info = Db::name('resource')->where('id',$id)->where('status',1)->find();
		if(empty($info)){
		   $this->error('参数错误');
		}
		View::assign('info',$info);

		//课程名称
		$courseName = Db::name('course')->where('id',$info['course_id'])->value('name');
		View::assign('courseName',$courseName);

		// 目录内容
		$catalogs  = Db::name('resource')->where(array('course_id'=>$info['course_id']))->where('status',1)->field('id,title')->order('sort desc ,id desc')->select();
		View::assign('catalogs',$catalogs);

		$type = input('type',1);
		if($type==2){
		   $content = $info['document'] ? $info['document'] : '<center>暂无内容，敬请期待！</center>';
		   View::assign('content',$content);
		}
		View::assign('type',$type);

		//观看记录
		$user_id = session('user_id');
		if($user_id){
			$record_info = Db::name('learn_record')->where('user_id',$user_id)->where('resource_id',$id)->find();
			if(empty($record_info)){
				$dataArr = array(
				    'user_id' => $user_id,
					'course_id' => $info['course_id'],
					'resource_id' => $id,
					'addtime' => date('Y-m-d H:i:s')
				);
				$learn_record = new LearnRecord;
				$learn_record->save($dataArr);
			}else{
				//model('learn_record')->where('id',$record_info['id'])->update(['addtime' => date('Y-m-d H:i:s')]);
				LearnRecord::update(['addtime' => date('Y-m-d H:i:s')],['id' => $record_info['id']]);
			}
		}

		//上、下一节
		$ids = Db::name('resource')->where(array('course_id'=>$info['course_id']))->where('status',1)->order('sort desc,id desc')->column('id');
		$uid = $this->up_down( $id , $ids , 'up');
		$did = $this->up_down( $id , $ids , 'down');
		$index = array_search($info['id'],$ids);
		View::assign('uid',$uid);
		View::assign('did',$did);
		View::assign('index',$index+1);

		return view();
    }
	
	//源码下载
	public function downloadCode(){
		$id = input('id',0,'int');  // 获取资源ID
		$result = checkRoot($id); 	// 检查下载权限
	    if(!$result){
		   $this->error('请您先登录！');
	    }
		// 根据ID查找资源信息
		$info = Db::name('resource')->where('id',$id)->where('status',1)->find();	
		if(empty($info) || empty($info['code_path'])){
		   $this->error('参数有误！'); 
		   exit;
		}		
		
		//下载记录
		$user_id = session('user_id');
		if($user_id){
			// 根据用户ID查找下载资源信息
			$record_info = Db::name('download_record')->where('user_id',$user_id)->where('resource_id',$id)->find();
			if(empty($record_info)){ // 如果首次下载，写入download_record表
				$dataArr = array(
					'user_id' => $user_id,
					'course_id' => $info['course_id'],
					'resource_id' => $id,
					'addtime' => date('Y-m-d H:i:s')
				);
				//model('download_record')->save($dataArr);
				$download_record = new DownloadRecord;
				$download_record->save($dataArr);
			}else{ // 如果非首次下载，更改下载时间
				//model('download_record')->where('id',$record_info['id'])->update(['addtime' => date('Y-m-d H:i:s')]);
				DownloadRecord::update(['addtime' => date('Y-m-d H:i:s')],['id' => $record_info['id']]);
			}
		}

		$save_path = root_path()."/public/static/uploads/code/".$info['code_path']; // 获取资源文件路径
		$title = autoCharset($info['title'],'utf-8','gbk');  // 转换字符集
		$find  = array(' ','<','>');
		$title = str_replace($find,'',$title);	// 替换字符串
		
		//开始下载
		$file = fopen($save_path,"r"); // 打开资源文件
		header("Content-type:application/octet-stream"); // 不指定二进制类型
		header("Content-Length:".filesize($save_path));  // 设置文件大小
		header("Content-Disposition:attachment;filename=".$title.strrchr($info['code_path'],'.')); // 提示用户保存附件
		readfile($save_path); // 读取文件
		fclose($file); // 关闭文件
		exit;	
	}
	
	//上、下一节
	private function up_down( $id , $arr , $flag){
			
		$arr_key_max = count($arr)-1;
		$id_key = array_search($id,$arr);
		
		if($flag=="up"){
		   $uid = ($id_key==0) ? false : $arr[$id_key-1];		  
		   return $uid;
		}
		if($flag=="down"){
		   $did = ($id_key==$arr_key_max) ? false : $arr[$id_key+1];
		   return $did;
		}
		
	}
	
	
	//登录页面
	public function login()
	{
	   if(session('user_id') || session('username')){
	      return redirect('Index/user');
	   }else{
	      return view();
	   }
	}
	
	//登录验证
	public function chkLogin()
	{
	   if(request()->isAjax()){
			if(session('qavalue') != input('iQapTcha')){
			    $res['status'] = false;
                $res['msg'] = '请滑动滑块！';
			}else{								 
				//$member = model('Member');
				$member = new Member;
				$num = $member->login(input('post.')); 				
				if($num==1){
					$res['status'] = true;
					$res['msg'] = url('Index/index');
				}elseif($num==2){
					$res['status'] = false;
					$res['msg'] = '密码错误！';
				}elseif($num==3){
					$res['status'] = false;
					$res['msg'] = '用户不存在！';
				}
			}
        }else{
		    $res['status'] = false;
            $res['msg'] = '请求错误~';
		}
		return json($res);
	}
	
	// 滑块初始化
	public function setQapTcha()
	{      
       session('qavalue',input('pass')); //   session('qavalue')值，pass参数在Qaptcha.jquery.js中设置
    }
	
	// 校验滑块
	public function checkSlider()
	{
        $aResponse['error'] = false; // 初始化响应变量
        session('iQaptcha',false);   // 初始化session

        if(isset($_POST['action'])){ // 判断POST请求参数是否存在
            if(htmlentities($_POST['action'], ENT_QUOTES, 'UTF-8') == 'qaptcha'){  // 判断参数值是否正确
                session('iQaptcha',true); // 设置session('iQaptcha')的值
                if(session('iQaptcha')){
                    $aResponse['val'] = session('qavalue');
                    return json($aResponse);
                }else{
                    $aResponse['error'] = true;
                    return json($aResponse);
                }
            }else{
                $aResponse['error'] = true;
                return json($aResponse);
            }
        }else{
            $aResponse['error'] = true;
            return json($aResponse);
        }
    }
	
	//注册页面
	public function regist()
	{
	   if(session('user_id') || session('username')){
	      session(null); 
	   }
	   return view();	   
	}
	
	//保存用户
	public function saveMember()
	{
	   if(request()->isAjax()){
			if(!captcha_check(input('code'))){
			    $res['status'] = false;
                $res['msg'] = '验证码错误~';
			}else{				
				$post = input('post.');  			         				
				// 验证表单
				$validate = new MemberValidate();
				if(!$validate->scene('save')->check($post)){  
					$res['status'] = false;
					$res['msg'] = $validate->getError(); 
					return json($res);               
				}
				$data = array(
				    'username' => $post['username'],
					'password' => md5(sha1($post['password'])), 
					'addtime'  => time(),
				);
				//$member = model('Member');
				$member = new Member;
				$result = $member->save($data); 
				if($result){
				    session('user_id', $member->id);
                    session('username', $post['username']);
					$res['status'] = true;
					$res['msg'] = url('Index/index');
				}else{
					$res['status'] = false;
					$res['msg'] = '保存失败！';
				}
			}
        }else{
		    $res['status'] = false;
            $res['msg'] = '请求错误~';
		}
		return json($res);	
	}
	
	//退出
	public function logout(){
        session('user_id',null); 
		session('username',null); 
        return redirect('Index/index');
    }
	
}