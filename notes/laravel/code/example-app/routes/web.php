<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\UserController;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

//Route::get('/', function () {
//    return view('welcome', ['name' => 'andyron come on!']);  // TODO  Undefined variable $name  可能是需要再控制器中
//});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::get('/profile', function () {
//        return 'xxadf';
//    });
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/andy', function () {
    return view('andy');
});

//Route::get('/counter', function () {
//    return view('livewire.counter');
//});

Route::get('/counter', Counter::class);


require __DIR__.'/auth.php';


Route::get('/test', function () {
    return 'hello world!';
});


// 静态站点
// 首页
Route::get('/', function () {
    return view('welcome');
});

// 关于我们
Route::get('about', function () {
    return view('about');
});

// 产品页
Route::get('products', function () {
    return view('products');
});

// 服务页
Route::get('services', function () {
    return view('services');
});


// 路由动作
Route::post('/', function () {});
Route::put('/', function () {});
Route::delete('/', function () {});
//Route::any('/', function () {});


// 复杂业务逻辑处理
Route::get('/', [WelcomeController::class, 'index']);


// 路由参数
//Route::get('user/{id}', function ($id) {
//    return "用户ID: " . $id;
//});
//Route::get('info/{id?}', function ($id = 1) {
//    return "用户ID: " . $id;
//})->name("info.profile"); // 路由命名
//Route::get('page/{id}', function ($id) {
//    return '页面ID: ' . $id;
//})->where('id', '[0-9]+');

//Route::get('page/{name}', function ($name) {
//    return '页面名称: ' . $name;
//})->where('name', '[A-Za-z]+');

//Route::get('page/{id}/{slug}', function ($id, $slug) {
//    return $id . ':' . $slug;
//})->where(['id' => '[0-9]+', 'slug' => '[A-Za-z]+']);


// 路由分组，中间体
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return 'dashboard';
    });
    Route::get('account', function () {
        return 'account';
    });
});

// 路由路径前缀
Route::prefix('api')->group(function () {
    Route::get('/', function () {
        // 处理 /api 路由
        return '前缀api';
    })->name('api.index');
    Route::get('users', function () {
        // 处理 /api/users 路由
        return 'users';
    })->name('api.users');
    Route::get('v1',function () { return 'version 1.0'; });
});


// 子域名路由  TODO
Route::domain('admin.blog.test')->group(function () {
    Route::get('/', function () {
        return '处理 http://admin.blog.test 路由';
    });
});


// 默认情况下，如果没有指定完整的命名空间，那么路由文件 web.php 中所有控制器都位于 App\Http\Controllers 命名空间下
Route::get('/task', 'App\Http\Controllers\TaskController@home');
// TODO 为什么要使用完整的命名空间
//Route::get('task/create', 'TaskController@create');
//Route::post('task', 'TaskController@store');



Route::group([], function () {
    Route::get('hello', function () { return "Hello!!"; });
    Route::get('world', function () { return "World!!"; });
});

//Route::resource('post', 'App\Http\Controllers\PostController');
Route::resource('post', PostController::class);


Route::middleware('throttle:60,1')->group(function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/test', [UserController::class, 'test']);
    Route::post('/user/form', [UserController::class, 'form']);
});


// CSRF 保护 测试
Route::get('task/{id}/delete', function ($id) {
//    return '<form method="post" action="' . route('task.delete', [$id]) . '">
//                <input type="hidden" name="_method" value="DELETE">
//                <button type="submit">删除任务</button>
//            </form>';
    return '<form method="post" action="' . route('task.delete', [$id]) . '">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="' . csrf_token() . '">
                <button type="submit">删除任务</button>
            </form>';
});
Route::delete('task/{id}', function ($id) {
    return 'Delete Task ' . $id;
})->name('task.delete');


// 视图三种格式
// php
Route::get('user/{id?}', function ($id = 1) {
    return view('user.profile', ['id' => $id]);
})->where('id', '[0-9]+')->name('user.profile');
// blade
Route::get('page/{id}', function ($id) {
    return view('page.show', ['id' => $id]);
})->where('id', '[0-9]+');
// css
Route::get('page/css', function () {
    return view('page.style');
});


// 用于显式上传表单
Route::get('form', [RequestController::class, 'formPage']);
// 用于处理文件上传
Route::post('form/file_upload', [RequestController::class, 'fileUpload']);


// TODO
Route::get('test_artisan', function () {
    $exitCode = Artisan::call('welcome:message', [
        'name' => 'andy'
    ]);
});


Route::get('user/show', [UserController::class, 'show']);
