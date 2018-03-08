<?php

header("Content-type:text/html; charset=utf-8");

require __DIR__ . '/../../vendor/autoload.php';

// 框架主体
require __DIR__ . '/../../vendor/beansir/newx-framework/Newx.php';

// 配置目录
Newx::setDir('web', __DIR__); // 根目录
Newx::setDir('app', __DIR__ . '/../'); // 应用目录
Newx::setDir('module', __DIR__ . '/../../'); // 模块目录

// 配置文件
$config = require __DIR__ . '/../config/config.php';

// 开始运行
Newx::run($config);