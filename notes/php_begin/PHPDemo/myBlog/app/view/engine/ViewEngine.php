<?php
namespace App\View;
interface ViewEngine
{
    public function extract($path, $data): string;
}