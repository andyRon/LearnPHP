<?php
namespace App\Http;

/**
 * 路由类，表示每一个路由
 * $methods：表示该路由支持的请求方法，例如 GET、POST、PUT、DELETE；
 * $uri：表示该路由匹配的 URL 请求路径，比如 /、/album、/post；
 * $action：表示路由匹配成功后对应的处理逻辑，可以是匿名函数，也可以是控制器方法；
 * $params：表示请求路径中的路由参数（注意不是查询字符串中的请求参数）。
 */
class Route
{
    public array $methods;
    public string $uri;
    public string $action;
    public string $params;

    public function __construct($methods, $uri, $action)
    {
        $this->methods = $methods;
        $this->uri = $uri;
        $this->action = $action;
    }
}
