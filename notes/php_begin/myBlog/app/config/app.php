<?php

return [
    'app' => [
        'name' => "andy的博客",
        'desc' => '让学习与进取者不再孤独',
        'url'  => 'http://andyron.top',
        'basePath' => __DIR__ . '/../../',
        'store' => [
            'default' => 'mysql',
            'drivers' => [
                'array' => [

                ],
                'mysql' => [
                    'driver' => 'mysql',
                    'host' => '127.0.0.1',
                    'port' => 3306,
                    'database' => 'my_blog',
                    'username' => 'root',
                    'password' => '33824',
                    'charset' => 'utf8mb4',
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