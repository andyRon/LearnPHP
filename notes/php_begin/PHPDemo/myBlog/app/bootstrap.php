<?php
namespace App;

use App\Core\Container;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container as IlluminateContainer;

function bootApp(Container $container)
{
    initConfig($container);
    registerProviders($container);
    initDatabase($container);
    return $container;
}

function registerProviders(Container $container)
{
    $providers = $container->resolve('app.providers');
    foreach ($providers as $provider) {
        $providerInstance = new $provider($container);
        $providerInstance->register();
    }
}

function initConfig(Container $container)
{
    $config = require_once __DIR__ . '/config/app.php';
//    $container->bind('app.name', $config['name']);
//    $container->bind('app.desc', $config['desc']);
//    $container->bind('app.url', $config['url']);
//    $container->bind('app.store', $config['store']);
//    $container->bind('app.editor', $config['editor']);
//    $container->bind('app.providers', $config['providers']);
//    $container->bind('view.engine', $config['view.engine']);
//    $container->bind('view.path', $config['view.path']);
    foreach ($config as $module => $c) {
        foreach ($c as $key => $val) {
            $container->bind($module . '.' . $key, $val);
        }
    }
}

// 基于 Capsule Manager 初始化数据库连接。
// 并设置事件分发器，启动 Eloquent 模型类全局可用（为了编写 Eloquent 模型类，如果只是使用 Laravel 提供的数据库查询构建器功能，则不需要这些操作）
function initDatabase(Container $container)
{
    $capsule = new Capsule();
    $dbConfig = $container->resolve('app.store');
    $capsule->addConnection($dbConfig['drivers'][$dbConfig['default']]);
    $capsule->setEventDispatcher(new Dispatcher(new IlluminateContainer()));
    $capsule->setAsGlobal();
    $capsule->bootEloquent();
}

// 新增一个 IoC 容器，通过依赖注入获取对象实例
$container = Container::getInstance();
return bootApp($container);