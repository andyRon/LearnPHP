<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    // 禁用 Eloquent 模型类自动维护时间字段机制
    public $timestamps = false;
    public $guarded = ['id'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}