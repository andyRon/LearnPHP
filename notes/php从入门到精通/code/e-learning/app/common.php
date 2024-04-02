<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Db;

/*** 应用公共文件 ***/

//获取课程小节数
function getResourceTotal($id){
    $total = Db::name('resource')->where('course_id',$id)->where('status',1)->count();
    return $total;
}

//获取课程学习人数
function getCourseLearnerTotal($id){
    $total = Db::name('learn_record')->where('course_id',$id)->count('distinct user_id');
    return $total;
}

//获取课程学习人数
function getVideoLearnerTotal($id){
    $total = Db::name('learn_record')->where('resource_id',$id)->count('distinct user_id');
    return $total;
}

//获取课程
function getCourseName($id){
    $name = Db::name('course')->where('id',$id)->value('name');
    return $name;
}

//获取资源标题
function getResourceTitle($id){
    $title = Db::name('resource')->where('id',$id)->value('title');
    return $title;
}

//转换字符集
function autoCharset($fContents, $from='gbk', $to='utf-8') {
    $from   = strtoupper($from) == 'UTF8' ? 'utf-8' : $from;
    $to     = strtoupper($to) == 'UTF8' ? 'utf-8' : $to;
    if (strtoupper($from) === strtoupper($to) || empty($fContents) || (is_scalar($fContents) && !is_string($fContents))) {
        //如果编码相同或者非字符串标量则不转换
        return $fContents;
    }
    if (function_exists('mb_convert_encoding')) {
        return mb_convert_encoding($fContents, $to, $from);
    } elseif (function_exists('iconv')) {
        return iconv($from, $to, $fContents);
    } else {
        return $fContents;
    }
}

//浏览权限判断
function checkRoot($id){
    $user_id = session('user_id');
    if(empty($user_id)){
        if(cookie("islook")){
            if(cookie("resource_id") == $id){
                return true;
            }else{
                return false;    //当天观看免费视频次数用完
            }
        }else{
            cookie("islook", "yes", time()+24*60*60,'/');
            cookie("resource_id", $id, time()+24*60*60,'/');
            return true;
        }
    }else{
        return true;
    }
}
