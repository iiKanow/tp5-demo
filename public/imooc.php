<?php
//[应用入口文件]

//定义应用目录
define('APP_PATH', __DIR__.'/../application/');
require __DIR__.'/../thinkphp/start.php';

$build = include '../build.php';
\think\Build::run($build,'application',true);
// \think\Build::run($build);
// \think\Build::module('auth');