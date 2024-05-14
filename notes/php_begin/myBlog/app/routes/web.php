<?php
$router = new \App\Http\Router();


//$store = $container->resolve(\App\Store\StoreContract::class);
//$connection = $store->newConnection();
$request = $container->resolve('request');


//$router->register('get', '/', function () use ($container, $connection) {
//    $albums = $connection->table('albums')->selectAll();
//    include __DIR__  . "/../../views/home.php";
//});
//
//$router->register('get', 'album', function () use ($container, $request, $connection) {
//    $id = intval($request->get('id'));
//    if (empty($id)) {
//        echo '请指定要访问的专辑 ID';
//        exit();
//    }
//    $album = $connection->table('albums')->select($id);
//    $posts = $connection->table('posts')->selectByWhere(['album_id' => $id]);
//    include __DIR__  . '/../../views/album.php';
//});

//$router->register('get', '/', 'HomeController@index');
//
//$router->register('get', 'album', 'AlbumController@list');
//
//$router->register('get', 'post', 'PostController@show');


//$router->register(['get', 'post'], 'login', function () use ($container,  $request, $connection) {
//    $session = $container->resolve('session');
//    if ($session->has('auth_user')) {
//        // 用户已登录成功，跳转到首页
//        $response = new \App\Http\Response('', 302, ['Location' => '/']);
//        $response->prepare($request)->send();
//        return;
//    }
//    if (strtolower($request->getMethod()) == 'get') {
//        $error = '';
//        include __DIR__  . '/../../views/login.php';
//    } else {
//        $name = $request->get('name');
//        $password = $request->get('password');
//        if (empty($name) || empty($password)) {
//            $error = '用户名和密码不能为空';
//            include __DIR__  . '/../../views/login.php';
//            return;
//        }
//        $user = $connection->table('users')->selectByWhere(['name' => $name]);
//        if ($user[0]['password'] == md5($password)) {
//            // 用户登录成功
//            $session->set('auth_user', $user);
//            // 跳转到首页
//            $response = new \App\Http\Response('', 302, ['Location' => '/']);
//            $response->prepare($request)->send();
//            return;
//        }
//        // 返回到用户登录页面，并提示错误信息
//        $error = '用户名和密码不匹配，请重试';
//        include __DIR__  . '/../../views/login.php';
//    }
//});

// TODO 将HomeController@index形式改为[HomeController::class, 'index']
$router->register('get', '/', 'HomeController@index');
$router->register('get', 'about', 'HomeController@about');
$router->register(['get', 'post'], 'contact', 'HomeController@contact');

$router->register('get', 'album', 'AlbumController@list');
$router->register('get', 'post', 'PostController@show');

$router->register('get', 'admin', 'Admin\DashboardController@index');

$router->register(['get', 'post'], 'login', 'AuthController@login');
$router->register('post', 'logout', 'AuthController@logout');

$router->register('get', 'admin/albums', 'Admin\AlbumController@index');
$router->register('get', 'admin/posts', 'Admin\PostController@index');
$router->register('get', 'admin/messages', 'Admin\MessageController@index');

$router->register(['get', 'post'], 'admin/album/new', 'Admin\AlbumController@add');
$router->register(['get', 'post'], 'admin/album/edit', 'Admin\AlbumController@edit');
$router->register(['post'], 'admin/album/delete', 'Admin\AlbumController@delete');

$router->register(['get', 'post'], 'admin/post/new', 'Admin\PostController@add');
$router->register(['get', 'post'], 'admin/post/edit', 'Admin\PostController@edit');
$router->register(['post'], 'admin/post/delete', 'Admin\PostController@delete');

$router->register('post', 'admin/message/delete', 'Admin\MessageController@delete');


return $router;