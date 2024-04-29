<?php

namespace App\Http\controller;

use App\Core\Container;
use App\Http\Request;
use App\Http\Session;
use App\Store\StoreContract;
use App\View\View;

/**
 * 控制器基类
 */
class Controller
{
    /**
     * 数据库连接
     */
    protected StoreContract $connection;
    /**
     * 应用容器
     */
    protected Container $container;
    /**
     * 全局请求实例
     */
    protected Request $request;
    /**
     */
    protected View $view;

    /**
     */
    protected Session $session;

    protected $siteName;
    public function __construct()
    {
        $this->container = Container::getInstance();
        $store = $this->container->resolve(StoreContract::class);
        $this->connection = $store->newConnection();
        $this->request = $this->container->resolve('request');
        $this->view = $this->container->resolve('view');
        $this->session = $this->container->resolve('session');
        $this->siteName = $this->container->resolve('app.name');
    }
}