<?php
namespace app\admin\validate;
use think\Validate;

class AdminUsers extends Validate
{

    protected $rule=[
        'username' => 'require|min:3|max:16',
		'password' => 'require|min:6|max:32',
    ];


    protected $message=[
        'username.require' => '用户名不得为空！',
		'username.min'     => '用户名至少3位！',
		'username.max'     => '用户名最多16位！',
		'password.require' => '密码不得为空！',
		'password.min'     => '密码至少6位！',
		'password.max'     => '密码最多32位！',
    ];

    protected $scene=[
		'edit'  => ['username','password'],
    ];





    

    




   

	












}
