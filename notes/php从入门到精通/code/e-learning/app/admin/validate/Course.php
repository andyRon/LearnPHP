<?php
namespace app\admin\validate;
use think\Validate;

class Course extends Validate
{

    protected $rule=[
        'name' => 'require',
		'image_path' => 'require',
		'sort' => 'require|integer|gt:0',
    ];

    protected $message=[
        'name.require' => '课程名称不得为空！',
		'image_path.require' => '课程封面不得为空！',
		'sort.require' => '排序值不得为空！',
		'sort.integer' => '排序值必须为整数！',
		'sort.gt' => '排序值必须大于0！',
    ];

    protected $scene=[
        'add'  => ['name','image_path','sort'],
    ];





    

    




   

	












}
