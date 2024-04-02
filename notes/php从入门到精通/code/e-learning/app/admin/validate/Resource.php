<?php
namespace app\admin\validate;
use think\Validate;

class Resource extends Validate
{

    protected $rule=[
        'title' => 'require',
		'video_path' => 'require',
		'sort' => 'require|integer|gt:0',
    ];

    protected $message=[
        'title.require' => '资源名称不得为空！',
		'video_path.require' => '请上传视频！',
		'sort.require' => '排序值不得为空！',
		'sort.integer' => '排序值必须为整数！',
		'sort.gt' => '排序值必须大于0！',
    ];

    protected $scene=[
        'add'  => ['title','video_path','sort'],
    ];





    

    




   

	












}
