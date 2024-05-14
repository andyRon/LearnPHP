<?php
namespace App;

use App\Core\Container;
use App\Http\Exception\ValidationException;
use App\Http\Response;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container as IlluminateContainer;

/**
 * 项目初始化函数
 * @param Container $container
 * @return Container
 */
function bootApp(Container $container): Container
{
    registerExceptionHandler();
    initConfig($container);
    registerProviders($container);
    initDatabase($container);
    return $container;
}

/**
 * 把配置文件（'app.providers'）指定的服务提供者注册到容器中
 * @param Container $container
 * @return void
 */
function registerProviders(Container $container): void
{
    $providers = $container->resolve('app.providers');
    foreach ($providers as $provider) {
        $providerInstance = new $provider($container);
        $providerInstance->register();
    }
}

/** 把配置信息绑定到容器中
 * @param Container $container
 * @return void
 */
function initConfig(Container $container): void
{
    $config = require_once __DIR__ . '/config/app.php';
    foreach ($config as $module => $c) {
        foreach ($c as $key => $val) {
            $container->bind($module . '.' . $key, $val);
        }
    }
}

/**
 * 基于 Capsule Manager 初始化数据库连接。
 * 并设置事件分发器，启动 Eloquent 模型类全局可用（为了编写 Eloquent 模型类，如果只是使用 Laravel 提供的数据库查询构建器功能，则不需要这些操作）
 * @param Container $container
 * @return void
 */
function initDatabase(Container $container): void
{
    $capsule = new Capsule();
    $dbConfig = $container->resolve('app.store');
    $capsule->addConnection($dbConfig['drivers'][$dbConfig['default']]);
    $capsule->setEventDispatcher(new Dispatcher(new IlluminateContainer()));
    $capsule->setAsGlobal();
    $capsule->bootEloquent();
}
/**
 * 注册全局异常处理器
 * @return void
 */
function registerExceptionHandler(): void
{
    set_exception_handler(function ($e) {
        $response = new Response();
        if ($e instanceof ValidationException) {
            $response->setStatusCode(422);
            $response->setContent($e->getMessage());
        } else {
            print_r($e->getMessage());die();
            $response->setStatusCode(500);
            $response->setContent('服务器异常');
        }
        $response->send();
    });
}

// 新增一个 IoC 容器，通过依赖注入获取对象实例
$container = Container::getInstance();
return bootApp($container);