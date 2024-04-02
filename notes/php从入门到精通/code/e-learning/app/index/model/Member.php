<?php

namespace app\index\model;
use think\Model;

class Member extends Model
{
    public function login($data){
        $info = Member::getByUsername($data['username']);
        if($info){
            if($info['password'] == md5(sha1($data['password']))){
                session('user_id', $info['id']);
                session('username', $info['username']);
                return 1; //密码正确
            }else{
                return 2; //密码错误
            }
        }else{
            return 3; //用户不存在
        }
    }

}