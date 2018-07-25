<?php
/**
 * Created by PhpStorm.
 * User: Txk
 * Date: 2018/7/25
 * Time: 16:33
 */
function auto_load_tpl($tplName)
{
    global $bbsList;    //论坛帖子列表
    global $bbsListPage;//论坛帖子列表分页html
    global $bbsListHot; //论坛热门帖子列表
    global $bbsType;    //论坛帖子类型 1最新 2热门
    global $details;    //论坛帖子详情
    global $comment;    //论坛评论列表
    global $userList;   //论坛当前用户信息
    global $pUserList;  //论坛发帖人用户信息

    //自动加载模板
    include 'view/tpl/'.$tplName.'_tpl.php';
}
//连接数据库，使用频繁，每次调用数据，就会使用。
// TP3 查询语句写法。
// M('Forum_bbs')->field(true)->where(array('status'=>1))->find();
function db_connect($db)
{
    // 创建连接
    $conn = mysqli_connect($db['db_host'], $db['db_user'], $db['db_pass'],$db['db_name']);

    // 检测连接
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}