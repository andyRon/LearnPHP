<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/andy', function () {
    return view('andy');
});

Route::get('/counter', function () {
    return view('livewire.counter');
});

Route::get('/user', [\App\Http\Controllers\UserController::class, 'index']);

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
Route::get('/', 'WelcomeController@index');


// 路由参数
Route::get('user/{id}', function ($id) {
    return "用户ID: " . $id;
});
Route::get('info/{id?}', function ($id = 1) {
    return "用户ID: " . $id;
})->name("info.profile"); // 路由命名
Route::get('page/{id}', function ($id) {
    return '页面ID: ' . $id;
})->where('id', '[0-9]+');

Route::get('page/{name}', function ($name) {
    return '页面名称: ' . $name;
})->where('name', '[A-Za-z]+');

Route::get('page/{id}/{slug}', function ($id, $slug) {
    return $id . ':' . $slug;
})->where(['id' => '[0-9]+', 'slug' => '[A-Za-z]+']);


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
});


//
Route::domain('admin.blog.test')->group(function () {
    Route::get('/', function () {
        return '处理 http://admin.blog.test 路由';
    });
});


// 默认情况下，如果没有指定完整的命名空间，那么路由文件 web.php 中所有控制器都位于 App\Http\Controllers 命名空间下
Route::get('/task', 'TaskController@home');



