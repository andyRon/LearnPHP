<?php

return [
    // 默认使用的数据库连接配置
    'default'         => 'mysql',
    // 数据库连接配置信息
    'connections'     => [
        'mysql' => [
            'type'        => 'mysql',		// 数据库类型
            'hostname'    => '127.0.0.1',	// 服务器地址
            'database'    => 'thinkphp',	// 数据库名
            'username'    => 'root',		// 数据库用户名
            'password'    => '111',		// 数据库密码
            'hostport'    => '',			// 数据库连接端口
            'params'      => [],			// 数据库连接参数
            'charset'     => 'utf8',		// 数据库编码默认采用utf8
            'prefix'      => '',		// 数据库表前缀
        ]
    ],
];
