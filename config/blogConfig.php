<?php
/**
 * Created by PhpStorm.
 * User: txk
 * Date: 2018/7/21
 * Time: 17:38
 */
/*header("Content-type: text/html; charset=utf-8");
//设置中国时区
date_default_timezone_set('PRC');*/
//域名
$url = 'http://www.zhibo.com/index.php';
//升级内存
ini_set('memory_limit','512');
//设置每页显示信息数量
$num = 10;
//设置页面标题后缀
/*define('SITE_SUFFIX','php论坛_www.php.cn');*/

//设置数据库连接参数
$db = array(
    'db_host' => '127.0.0.1',
    'db_user' => 'root',
    'db_pass' => 'root',
    'db_name' => 'forum'
);
/*博客表名*/
$forum_name ='forum_bbs';
global  $BLOG_TITLE;//声明项目的标题文件
$BLOG_TITLE='个人博客';
//获取模板名称
$actionName = isset($_GET["a"])?$_GET["a"]:"list";
//对于action的加载
switch ($actionName){
    case 'list':
        //加载listAction
        include 'controller/listAction.php';break;
}

