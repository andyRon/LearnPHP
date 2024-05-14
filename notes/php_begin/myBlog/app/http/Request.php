<?php
namespace App\Http;

use Symfony\Component\HttpFoundation\Request as BaseRequest;

class Request extends BaseRequest
{
    public static function capture(): Request
    {
        // TODO
        static::enableHttpMethodParameterOverride();
        return static::createFromGlobals();
    }

    public function getPath(): string
    {
        $path = trim($this->getPathInfo(), '/');
        return $path == '' ? '/' : $path;
    }
}