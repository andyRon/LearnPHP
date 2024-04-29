<?php

namespace App\Http;

/**
 * 基于Route 类来编写路由注册和分发代码
 */
class Router
{
    protected $routes = [];

    public function register($methods, $uri, $callback)
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

    public function dispatch(Request $request)
    {
        $path = $request->getPath();
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
        if (is_callable($callback)) {  // TODO
            // 通过匿名函数注册的路由回调
            call_user_func($callback, $request);
        } elseif (is_string($callback) && strpos($callback, '@') !== false) {
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