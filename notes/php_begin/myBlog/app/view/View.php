<?php

namespace App\View;

use App\Http\Response;
use Exception;
use Throwable;

/**
 * 视图管理器
 */
class View
{
    /**
     * 模板引擎对象
     */
    protected ViewEngine $engine;
    /**
     * 视图模板的根路径
     */
    protected string $basePath;

    public function __construct(ViewEngine $engine, $basePath)
    {
        $this->engine = $engine;
        $this->basePath = $basePath;
    }

    /**
     * 用于被上层代码调用完成视图模板的解析和渲染。
     *
     * 将字符串格式 HTML 文档作为 Response 对象的响应实体随着 $response->send() 方法一起发送给客户端，完成视图渲染的闭环，
     * 如果解析视图模板过程中出错（比如视图文件不存在，变量解析出错），则返回 500 响应。
     * @param $path
     * @param $data
     * @return void
     */
    public function render($path, $data): void
    {
        $response = new Response();
        try {
            $content = $this->getContent($path, $data);
        } catch (Throwable $e) {
            $response->setStatusCode(500);
            $response->setContent($e->getMessage());
            $response->send();
            return;
        }
        $response->setContent($content);
        $response->setStatusCode(200);
        $response->send();
    }

    /**
     * 调用系统当前使用的模板引擎实例 $engine 的 extract 方法，完成视图模板的解析和 PHP 变量替换
     * @throws Exception
     */
    protected function getContent($path, $data): string
    {
        $path = $this->basePath . $path;
        if (!file_exists($path)) {
            throw new Exception('对应的视图文件不存在');
        }
        return $this->engine->extract($path, $data);
    }
}