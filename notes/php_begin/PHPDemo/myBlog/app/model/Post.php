<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//    public $id;
//    public $title;
//    public $html;
//    public $text;
//    public $album_id;
//    public $created_at;
//
//    public $table = 'posts';

    public $timestamps = false;
    protected $guarded = ['id', 'created_at'];

    // 定义某个 Post 模型实例归属于 Album 模型实例（通过 album_id 字段），
    // 而在 Album 类中通过 posts() 方法定义一个 Album 模型实例可能包含多个 Post 模型实例（一对多关联），这种关联关系与数据表记录的关联关系对应
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}