<?php
// 应用入口文件
// 检测PHP环境
//if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true);

#define('BIND_MODULE','Admin');//绑定模块
#define('BUILD_CONTROLLER_LIST','Index,User,Menu');//模块里面自动生成controller
#define('BUILD_MODEL_LIST','User,Menu');//模块里面自动生成的model

// 定义应用目录
define('APP_PATH','./Apps/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';