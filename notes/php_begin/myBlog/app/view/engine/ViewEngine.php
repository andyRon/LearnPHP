<?php
namespace App\View;
/**
 * PHP模板引擎实现的契约
 */
interface ViewEngine
{
    public function extract($path, $data): string;
}