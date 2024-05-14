<?php
namespace App\View;
/**
 * PHP模板引擎实现的契约
 */
interface ViewEngine
{
    /**
     * 视图模板的解析和PHP变量替换
     * @param $path
     * @param $data
     * @return string
     */
    public function extract($path, $data): string;
}