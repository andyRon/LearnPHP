<?php

namespace App\View;


class PhpEngine implements ViewEngine
{

    public function extract($path, $data): string
    {   // TODO
        ob_start();

        extract($data, EXTR_SKIP);

        try {
            include $path;
        } catch (\Throwable $e) {
            throw new \Exception('解析视图模版出错：' . $e->getMessage());
        }
        return ltrim(ob_get_clean());
    }
}