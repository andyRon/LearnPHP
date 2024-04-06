<?php
declare (strict_types = 1);
namespace app\admin\controller;
use app\admin\model\Book;
use think\facade\View;

class Index
{
    public function index()
    {
        $data['name'] = 'ThinkPHP';
        $data['email'] = 'thinkphp@qq.com';
        $data['create_time'] = time();
        View::assign('data', $data);

        return View::fetch();
    }
	public function miss(){
		$content = "<div style = 'text-align: center; margin: 200px;'><h1>404 Page Not Found</h1><p>Sorry nothing could be found</p></div>";
		return $content;
	}
	public function create() {
		try {
			$book = new Book;
			$book->save([//新增数据
				'name'  =>  'C++从入门到精通',
				'price' =>  47.8,
				'publish_time' =>  '2021-11-01'
			]);
			print_r('新增成功');
		} catch (Exception $e) {
			print_r('新增失败');
		}
	}
}
