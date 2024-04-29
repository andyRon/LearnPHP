<?php

return [
    'app' => [
        'name' => 'andyron的个人网站',
        'desc' => '让学习与进取者不再孤独',
        'url'  => 'http://andyron.top',
        'basePath' => __DIR__ . '/../../',
        'store' => [
            'default' => 'mysql',
            'drivers' => [
                'array' => [

                ],
                'mysql' => [
                    'host' => '127.0.0.1',
                    'port' => 3306,
                    'dbname' => 'my_blog',
                    'charset' => 'utf8mb4',
                    'user' => 'root',
                    'password' => 'root',
                    'collation' => 'utf8mb4_general_ci',
                    'prefix'    => '',
                ]
            ]
        ],
        'editor' => 'markdown',  // 支持html和markdown
        'providers' => [
            \App\Store\StoreProvider::class,
            \App\Printer\PrinterProvider::class,
            \App\View\ViewProvider::class,  // 注册视图提供者
        ],
    ],
    'view' => [
        'engine' => 'php',  // 视图模板引擎
        'path' => __DIR__ . '/../../resources/views/',  // 视图模板根路径
    ],
    'session' => [
        'lifetime' => 2 * 60 * 60
    ]
];