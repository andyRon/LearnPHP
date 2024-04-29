<?php

namespace App\View;

use App\Http\Response;

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
     * 用于被上层代码调用完成视图模板的解析和渲染
     * @param $path
     * @param $data
     * @return void
     */
    public function render($path, $data): void
    {
        $response = new Response();
        try {
            $content = $this->getContent($path, $data);
        } catch (\Throwable $e) {
            $response->setStatusCode(500);
            $response->setContent($e->getMessage());
            $response->send();
            return;
        }
        $response->setContent($content);
        $response->setStatusCode(200);
        $response->send();
    }

    protected function getContent($path, $data): string
    {
        $path = $this->basePath . $path;
        if (!file_exists($path)) {
            throw new \Exception('对应的视图文件不存在');
        }
        return $this->engine->extract($path, $data);
    }
}