<?php
declare (strict_types = 1);

namespace app\admin\controller;

use think\facade\Db;
use think\facade\View;
class Book
{
    public function read($id) {
		$book = Db::table('book')->where('id', $id)->find();      	#根据ID查询图书信息
		if ($book) {  
			$content = "《".$book['name']."》的图书ID是".$book['id'];
		} else {
			$content = "图书信息不存在";
		}
		return $content;
	}
	public function index() {
		$books = Db::table('book')->select();
		View::assign('books', $books);
		return View::fetch('index');
	}
}
