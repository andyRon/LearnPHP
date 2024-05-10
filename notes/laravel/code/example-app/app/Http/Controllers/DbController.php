<?php
namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\View\View;
use Predis\Client;
use function Laravel\Prompts\select;
use function Laravel\Prompts\table;

class DbController extends Controller
{
    public function index()
    {
//        $users = DB::select("select * from users");
//
//        $scalar = DB::scalar("select count(*) as num from users");
//
//        $res = DB::insert("insert into users2 (name, address) values (?,?)", ["tiger tang", "苏州城边"]);
//
//        $sessions = DB::connection('mysql')->select("select * from sessions");
//        dump($sessions);

//        $users = DB::table('users')->get();
//
//        $user = DB::table('users')->where('name', 'Andy Ron')->first();
//
//        $email = DB::table('users')->where('name', 'Andy Ron')->value('email');
//
//        $user = DB::table('users')->find(2);

        // 获取某一列的值
//        $names = DB::table('users')->pluck('name');
//        foreach ($names as $name) {
//            echo $name;
//        }

        // 以一次10条记录的块为单位检索整个 chinese_word 表：
//        DB::connection('mysql')->table('chinese_word')->orderBy('id')
//            ->chunk(10, function (Collection $words) {
//                foreach ($words as $word) {
//                    dump($word);
//                }
//            });


        // 获取含有用户最近一次发布博客时的 created_at 时间戳的用户集合
//        $latestPosts = DB::table('posts')
//            ->select('user_id', DB::raw('MAX(created_at) as last_post_created_at'))
//            ->where('is_published', true)
//            ->groupBy('user_id');
//        $users = DB::table('users')
//            ->joinSub($latestPosts, 'latest_posts', function (JoinClause $join) {
//                $join->on('users.id', '=', 'latest_posts.user_id');
//            })->get();
//        dump($users);

//        $first = DB::table('posts')->whereNull('is_published');
//        $unions = DB::table('posts')->whereNotNull('user_id')
//            ->union($first)->get();
//        dump($unions);

        $posts = DB::table('posts')
            ->whereFullText('content', 'Quam')
            ->get();
        dump($posts);

//        DB::table('posts')->where('is_published', 1)->dump();

    }

    public function page(): View
    {
        return view('db.index', [
            'posts' => DB::table('posts')->paginate(15)
        ]);
    }

    public function redis()
    {

        $client = new Client();
        $client->set('foo', 'bar');
        $value = $client->get('foo');
        dump($value);
        
        // TODO   You have a missing class import. Try importing this class: Illuminate\Support\Facades\Redis
//        Redis::set('name', 'Taylor');
//
//        $values = Redis::lrange('names', 5, 10);


    }
}
