<?php
/**
 * 入口文件 
 * 1 定义常量
 * 2 加载函数库
 * 3 启动框架 
 */
//定义header头
header("content-type:text/html;charset=utf8");
//定义当前目录
define('PATHNOW',realpath(''));
//框架的核心文件所处目录
define('CORE',PATHNOW.'/core');
//定义项目文件
define('MODULE','app');
define('APP',PATHNOW.'/app');

//是否开启调试模式
define('DEBUG',true);
include("vendor/autoload.php");
//判断是否开启调试模式
if(DEBUG){
	$whoops = new \Whoops\Run;
	$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	$whoops->register();
	ini_set('display_error','on');
}else{
	ini_set('display_error','off');
}
// echo PATHNOW;
//引入文件
include CORE.'/common/function.php';
// p(PATHNOW);
// 引入核心文件
include CORE.'/mvc.php';
// 如果访问的一个类不存在 就自动访问这个类
spl_autoload_register ('\core\mvc::load');
//这里前后顺序需要注意并且需要研究2-2
\core\mvc::run();

