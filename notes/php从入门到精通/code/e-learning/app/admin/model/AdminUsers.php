<?php

namespace app\admin\model;
use think\Model;
use think\Request;

class AdminUsers extends Model
{
    public function login($data){
        $info = AdminUsers::getByUsername($data['username']);
        if($info){
            if($info['password'] == md5($data['password'])){
                session('admin_user_id', $info['id']);
                session('admin_user_name', $info['username']);
				$data = [
				    'id' => $info['id'],
				    'lastlogintime' => $info['logintime'],
					'lastloginip' => $info['loginip'],
					'logintime' => date('Y-m-d H:i:s'),
					'loginip' => request()->ip(),
				];
				$this->update($data);
                return 2; //密码正确
            }else{
                return 3; //密码错误
            }
        }else{
            return 1; //用户不存在
        }
    }

}