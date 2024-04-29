<?php

namespace App\Http;

/**
 * 基于Route类来编写路由注册和分发代码【业务逻辑】
 */
class Router
{
    /**
     * 已注册的路由实例集合
     */
    protected array $routes = [];

    /**
     * 注册路由
     * @param $methods
     * @param $uri
     * @param $callback
     * @return void
     */
    public function register($methods, $uri, $callback): void
    {
        if (isset($this->routes[$uri])) {
            return;
        }
        if (is_string($methods)) {
            $methods = [$methods];
        }
        $route = new Route($methods, $uri, $callback);
        $this->routes[$uri] = $route;
    }

    /**
     * 路由分发
     * @throws \Exception
     */
    public function dispatch(Request $request): void
    {
        $path = $request->getPath();
        // 判断该请求路径是否有与之匹配的路由注册过
        if (!isset($this->routes[$path])) {
            $response = new Response('', 301, ['Location' => '/']);
            $response->prepare($request)->send();
            exit();
        }
        $route = $this->routes[$path];
        if (!in_array(strtolower($request->getMethod()), $route->methods)) { // TODO  $route不确定类型
            throw new \Exception("HTTP 请求方法不正确");
        }

        $callback = $route->action;
        // 如果是匿名回调函数的话，则直接执行该匿名函数，如果是控制器方法的话，则调用对应的控制器方法
        if (is_callable($callback)) {  // TODO
            // 通过匿名函数注册的路由回调
            call_user_func($callback, $request);
        } elseif (is_string($callback) && str_contains($callback, '@')) {
            // 通过控制器方法注册的路由回调
            list($controller, $method) = explode('@', $callback);
            $controller = 'App\\Http\\controller\\' . $controller;
            $instance = new $controller;
            call_user_func([$instance, $method]);
        } else {
            throw new \Exception("无效的路由回调");
        }

    }
}