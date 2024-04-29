<?php

namespace App\View;

use App\Core\Container;

/**
 * 视图服务提供者
 */
class ViewProvider
{
    /**
     * @var Container
     */
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    /**
     * 将 View 对象实例绑定到全局服务容器中
     */
    public function register()
    {
        $this->container->bind('view', function () {
            $config = $this->container->resolve('view.engine');
            $method = 'register' . ucfirst($config) . 'Engine';
            if (!method_exists($this, $method)) {
                throw new \Exception('对应的视图模版引擎暂不支持！');
            }
            $engine = call_user_func([$this, $method]);
            $basePath = $this->container->resolve('view.path');
            return new View($engine, $basePath);
        });
    }

    public function registerPhpEngine()
    {
        return new PhpEngine();
    }
}