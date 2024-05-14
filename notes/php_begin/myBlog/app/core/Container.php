<?php
namespace App\Core;

/**
 * 核心容器
 */
class Container
{
    protected static Container $instance;
    protected array $bindings = [];

    private function __construct()
    {
    }

    public static function getInstance(): Container
    {
        if (empty(self::$instance)) {
            return self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone()
    {
    }

    /**
     * 绑定接口实例/键值对数组容器
     * @param $key
     * @param $value
     * @return void
     */
    public function bind($key, $value): void
    {
        if (isset($this->bindings[$key])) {
            return;
        }
        $this->bindings[$key] = $value;
    }

    /**
     * 从容器中解析绑定的内容
     * @param $key
     * @return mixed
     */
    public function resolve($key): mixed
    {
        $value = $this->bindings[$key];
        if ($value instanceof \Closure) {
            return call_user_func($value);
        } else {
            return $value;
        }
    }
}