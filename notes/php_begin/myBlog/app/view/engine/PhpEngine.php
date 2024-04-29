<?php

namespace App\View;

/**
 * PHP原生视图模板引擎的实现
 */
class PhpEngine implements ViewEngine
{

    /**
     * @throws \Exception
     */
    public function extract($path, $data): string
    {
        // TODO 打开输出缓冲的理由
        ob_start();
        /*
        extract 函数将从外部传入的数组变量导入当前符号表（即在当前作用域内以数组键名作为变量名，以对应键值作为变量值），
        接下来调用 include 引入指定路径的视图文件到缓冲区，这样，从外部传入的变量就可以在视图文件中生效了。
         */
        extract($data, EXTR_SKIP);

        try {
            include $path;
        } catch (\Throwable $e) {
            throw new \Exception('解析视图模版出错：' . $e->getMessage());
        }
        return ltrim(ob_get_clean());
    }
}